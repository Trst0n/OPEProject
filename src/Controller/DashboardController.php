<?php

namespace App\Controller;

use App\Entity\Person;
use App\Entity\Request;

use App\Entity\Sponsorship;
use App\Entity\SponsorshipState;
use App\Entity\Student;
use App\Enum\LeadState;
use App\Repository\PersonRepository;
use App\Repository\ProposalRepository;
use App\Repository\RequestRepository;
use App\Repository\SponsorRepository;
use App\Repository\SponsorshipRepository;
use App\Repository\StudentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
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

    #[Route('/sponsorships', name: 'app_sponsorship_sponsorships',  methods: ['GET'])]
    public function sponsorships(SponsorshipRepository $sponsorshipRepository): Response{

        return $this->render('dashboard/match/sponsorships.html.twig', [
            'sponsorships' => $sponsorshipRepository->findBy(['state' => SponsorshipState::STATE_SPONSORSHIP])
        ]);
    }

    /**
     * @throws ORMException
     */
    #[Route('/user/{id}/sponsorship', name: 'app_sponsorship_new',  methods: ['GET'])]
    public function sponsorship(Request $student, ProposalRepository $proposalRepository, EntityManagerInterface $entityManager): Response{

        //algo a la place de la contruction ici
        $sponsors = $proposalRepository->findBy(['state' => LeadState::REGISTERED]);
        $sponsorships = [];

        foreach ($sponsors as $sponsor){
            $sponsorship = new Sponsorship();
            $sponsorship->setSponsorProposal($sponsor)->setSponsorRequest($student)->setWishes([]);

            $entityManager->persist($sponsorship);
            $sponsorships[] = $sponsorship;
        }
        $entityManager->flush();

        return $this->render('dashboard/match/sponsorship.html.twig', [
            'sponsorships' => $sponsorships,
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









}
