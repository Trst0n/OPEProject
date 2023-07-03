<?php

namespace App\Controller;

use App\Entity\Administrator;
use App\Entity\Person;
use App\Entity\Request;

use App\Entity\Sponsorship;
use App\Entity\SponsorshipState;
use App\Entity\Student;
use App\Enum\LeadState;
use App\Repository\AdministratorRepository;
use App\Repository\PersonRepository;
use App\Repository\ProposalRepository;
use App\Repository\RequestRepository;
use App\Repository\SponsorRepository;
use App\Repository\SponsorshipRepository;
use App\Repository\StudentRepository;
use App\Service\Mailing;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Workflow\WorkflowInterface;

#[Route('/dashboard')]
class DashboardController extends AbstractController
{

    #[Route('/', name: 'app_dashboard',  methods: ['GET'])]
    public function index(SponsorshipRepository $sponsorshipRepository, RequestRepository $requestRepository ,ProposalRepository $proposalRepository): Response
    {
        #TODO liens index

        //Nombre de sponsorship total & nombre de sponsorship en cours
        $numSponsorship = count($sponsorshipRepository->findAll());
        $numValidSponsorship = $numSponsorship - count($sponsorshipRepository->findBy(["state" => "ended"])) - count($sponsorshipRepository->findBy(["state" => "initialized"]));

        //Nombre de proposal "valid" & nombre de proposal inscrits
        $numProposals = count($proposalRepository->findAll());
        $numValidProposals = $numProposals - count($proposalRepository->findBy(["state" => LeadState::OUTDATED]));

        //Nombre de request "valid" & nombre de resquest inscrits
        $numRequests = count($requestRepository->findAll());
        $numValidRequests = $numRequests - count($requestRepository->findBy(["state" => LeadState::OUTDATED]));

        //Liste des matchs en attente
        $onHoldMatches= [];
        $noMatchRequests = [];
        foreach ($requestRepository->findAll() as $request) {
           if($request->getState() !== LeadState::OUTDATED && $request->getState() !== LeadState::SPONSORSHIP  && $request->getState() !== LeadState::MATCH_APPROVED){
               if($request->getState() === LeadState::REGISTERED){
                   $noMatchRequests[] = $request;
               }
               elseif($request->getState() === LeadState::MATCHED){
                   $onHoldMatches[] = $request;
               }
           }
        }

        //Requests sans match apparaitront en premier
        $onHoldMatches = array_merge($noMatchRequests , $onHoldMatches);

        //Num Sponsor disponible
        $numNoMatchSponsor = count($proposalRepository->findBy(['state' => LeadState::REGISTERED]));

        return $this->render('dashboard/index.html.twig', [
            'numSponsorship' => $numSponsorship, 'numValidSponsorship' => $numValidSponsorship, 'numProposals' => $numProposals,
            'numValidProposals' => $numValidProposals, 'numRequests' => $numRequests, 'numValidRequests' => $numValidRequests, 'onHoldMatches' => $onHoldMatches,
            'numNoMatchSponsor' => $numNoMatchSponsor

        ]);
        }

    #[Route('/users', name: 'app_dashboard_users',  methods: ['GET'])]
    public function users(PersonRepository $personRepository): Response{

        return $this->render('dashboard/users/persons.html.twig', [
            'persons' => $personRepository->findAll(), 'student' => Student::class,
        ]);
    }

    #[Route('/sponsors', name: 'app_dashboard_sponsors',  methods: ['GET'])]
    public function sponsors(SponsorRepository $sponsorRepository): Response{

        return $this->render('dashboard/users/sponsors.html.twig', [
            'sponsors' => $sponsorRepository->findAll(),
        ]);
    }

    #[Route('/students', name: 'app_dashboard_students',  methods: ['GET'])]
    public function students(StudentRepository $studentRepository): Response{

        return $this->render('dashboard/users/students.html.twig', [
            'students' => $studentRepository->findAll(),
        ]);
    }

    #[Route('/user/{id}', name: 'app_dashboard_user',  methods: ['GET'])]
    public function user(Person $person): Response{

        $civility = $person->getLeads()->last()->getCivility();
        $hasSponsorship = false;
        foreach ($person->getLeads() as $lead){
            if(count($lead->getSponsorship()) !== 0){
                $hasSponsorship = true;
            }
        }


        return $this->render('dashboard/users/person.html.twig', [
            'person' => $person, 'status' => ($person instanceof Student ? "Etudiant" : "Parrain"), 'civility' => $civility, 'request' => Request::class,
            'hasSponsorship' => $hasSponsorship
        ]);
    }

    #[Route('/log', name: 'app_dashboard_log',  methods: ['GET'])]
    public function log(): Response{

        //calcule le nombre de ligne pour boucler
        $contenu_fichier = file_get_contents('/home/tristan/Desktop/OPE/OPEProject/var/log/history.log');
        $numLine = substr_count($contenu_fichier, "\n");

        $log = [];
        $file = fopen('/home/tristan/Desktop/OPE/OPEProject/var/log/history.log', 'rb');

        for ($i = 0 ; $i<$numLine; $i++){
            $log[] = substr(fgets($file), 48, -6);
        }
        fclose($file);

        return $this->render('dashboard/accessibility/log.html.twig', [
            'logs' => $log
        ]);
    }

    #[Route('/sponsorships', name: 'app_dashboard_sponsorships',  methods: ['GET'])]
    public function sponsorships(SponsorshipRepository $sponsorshipRepository): Response{

        return $this->render('dashboard/match/sponsorships.html.twig', [
            'sponsorships' => $sponsorshipRepository->findBy(['state' => SponsorshipState::STATE_SPONSORSHIP])
        ]);
    }

    /**
     * @throws ORMException
     */
    #[Route('/user/{id}/sponsorship', name: 'app_dashboard_sponsorship_validation',  methods: ['GET'])]
    public function sponsorship(Request $student): Response{

        return $this->render('dashboard/match/sponsorship.html.twig', [
            'sponsorships' => $student->getSponsorship(),
            'student' => $student
        ]);
    }

    /**
     * @throws ORMException
     */
    #[Route('/validate/{sponsorship}', name: 'app_sponsorship_validate',  methods: ['GET'])]
    public function sponsorshipvalidation(Sponsorship $sponsorship, WorkflowInterface $sponsoringProcessStateMachine, EntityManagerInterface $entityManager ): Response{

        $sponsorship->setAdministrator($this->getUser()); //Ajout de l'admin qui a validé le match
        $sponsoringProcessStateMachine->apply($sponsorship, 'to_match');
        $request = $sponsorship->getSponsorRequest();


        foreach($request->getSponsorship() as $sponsorship){     /** on libere les parrains qui n'ont pas été choisis */
            if($sponsorship->getState() === "initialized"){
                $entityManager->remove($sponsorship);
            }
        }
        $entityManager -> flush();

        $this->addFlash('success', "Le parrainage a bien été pris en compte");
        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/matches', name: 'app_dashboard_matches',  methods: ['GET'])]
    public function matches(SponsorshipRepository $sponsorshipRepository): Response{

        $matches = array_merge($sponsorshipRepository->findBy(['state' => SponsorshipState::STATE_MATCH]),  $sponsorshipRepository->findBy(['state' => SponsorshipState::STATE_STUDENT_APPROVED]), $sponsorshipRepository->findBy(['state' => SponsorshipState::STATE_SPONSOR_APPROVED]));

        return $this->render('dashboard/match/matches.html.twig', [
            'matches' => $matches,
        ]);
    }

    #[Route('/match/{id}', name: 'app_dashboard_match',  methods: ['GET'])]
    public function match(Sponsorship $sponsorship): Response{

        return $this->render('dashboard/match/match.html.twig', [
            'match' => $sponsorship,
        ]);
    }

    #[Route('/admin', name: 'app_dashboard_admin',  methods: ['GET'])]
    public function admin(AdministratorRepository $administratorRepository): Response{

        return $this->render('dashboard/users/administrator.html.twig', [
            'administrators' => $administratorRepository->findAll()
        ]);
    }

    #[Route('/admin/create', name: 'app_dashboard_admin_create',  methods: ['POST'])]
    public function createAdmin(AdministratorRepository $administratorRepository ,Mailing $mailing, UserPasswordHasherInterface $passwordHasher, \Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $manager): Response{

        if($administratorRepository->findBy(['username' => $request->get('username')])){
            $this->addFlash('danger', "L'identifiant ". $request->get('username') . " est déjà utilisé par un administrateur.");
            return $this->redirectToRoute('app_dashboard_admin');
        }


        $newAdmin = new Administrator();
        $newAdmin->setUsername($request->get('username'))->setPassword($passwordHasher->hashPassword($newAdmin, $request->get('password')));
        $manager->persist($newAdmin);

        $this->addFlash('success', "Nouveau compte administrateur créé");
        $mailing->sendEmail($request->get('email'), "Votre nouveau compte sur la plateforme OPE", 'mail/account.html.twig', ['pwd' => $request->get('password'), 'username' => $newAdmin->getUsername()]);
        $manager->flush();

        return $this->redirectToRoute('app_dashboard_admin');
}

    #[Route('/admin/delete/{id}', name: 'app_dashboard_admin_delete',  methods: ['GET'])]
    public function deleteAdmin(Administrator $administrator ,EntityManagerInterface $manager): Response{

        if(in_array('ROLE_SUPER_ADMIN', $administrator->getRoles())){
            $this->addFlash('danger', "Vous n'avez pas les droits pour supprimer cet administrateur.");
            return $this->redirectToRoute('app_dashboard_admin');
        }

        $manager->remove($administrator);
        $manager->flush();

        return $this->redirectToRoute('app_dashboard_admin');
    }
    #[Route('/profil', name: 'app_dashboard_profile',  methods: ['GET'])]
    public function profile(): Response{

        return $this->render('dashboard/users/profile.html.twig', [
        ]);
    }





}
