<?php

namespace App\Controller;

use App\Entity\LeadState;
use App\Entity\Person;
use App\Entity\Sponsorship;
use App\Entity\SponsorshipState;
use App\Entity\Student;
use App\Repository\PersonRepository;
use App\Repository\ProposalRepository;
use App\Repository\RequestRepository;
use App\Repository\SponsorRepository;
use App\Repository\SponsorshipRepository;
use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{

    #[Route('/', name: 'app_dashboard',  methods: ['GET'])]
    public function index(SponsorshipRepository $sponsorshipRepository, RequestRepository $requestRepository ,ProposalRepository $proposalRepository): Response
    {
        #TODO liens index

        //Nombre de sponsorship total & nombre de sponsorship en cours
        $numSponsorship = count($sponsorshipRepository->findAll());
        $numValidSponsorship = $numSponsorship - count($sponsorshipRepository->findBy(["state" => "ended"]));

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
               if($request->getState() === LeadState::AVAILABLE){
                   $noMatchRequests[] = $request;
               }
               $onHoldMatches[] = $request;
           }
        }

        //Requests sans match apparaitront en premier
        $onHoldMatches = $noMatchRequests + $onHoldMatches;

        return $this->render('dashboard/index.html.twig', [
            'numSponsorship' => $numSponsorship, 'numValidSponsorship' => $numValidSponsorship, 'numProposals' => $numProposals,
            'numValidProposals' => $numValidProposals, 'numRequests' => $numRequests, 'numValidRequests' => $numValidRequests, 'onHoldMatches' => $onHoldMatches,

        ]);
        }

    #[Route('/users', name: 'app_dashboard_users',  methods: ['GET'])]
    public function users(PersonRepository $personRepository): Response{

        $jsvar = [];

        foreach($personRepository->findAll() as $person) {
            $jsvar[]= ["id" => $person->getId(), "firstname"=>$person->getFirstname(),"lastname"=>$person->getLastname(), "createAt" => $person->getCreatedAt()->format("d-m-Y"), "email" => $person->getEmail()
            , "phonenumber" => $person->getPhonenumber(), "status" => ($person instanceof Student ? "student" : "sponsor")];
        }


        $personsname = [];

        foreach($personRepository->findAll() as $person){
            $personsname[] = $person->getFirstname(). " " . $person->getLastname();
        }

        return $this->render('dashboard/persons.html.twig', [
            'persons' => $personRepository->findAll(), 'student' => Student::class, 'personsnames' => $personsname, 'jsvar' => $jsvar
        ]);
    }

    #[Route('/user/{id}', name: 'app_dashboard_user',  methods: ['GET'])]
    public function user(Person $person): Response{

        return $this->render('dashboard/person.html.twig', [
            'person' => $person
        ]);
    }

    #[Route('/sponsorships', name: 'app_dashboard_sponsorships',  methods: ['GET'])]
    public function sponsorships(SponsorshipRepository $sponsorshipRepository): Response{

        return $this->render('dashboard/sponsorships.html.twig', [
            'sponsorships' => $sponsorshipRepository->findBy(['state' => SponsorshipState::STATE_SPONSORSHIP])
        ]);
    }

    #[Route('/sponsorship/{id}', name: 'app_dashboard_sponsorship',  methods: ['GET'])]
    public function sponsorship(Sponsorship $sponsorship): Response{

        return $this->render('dashboard/sponsorships.html.twig', [
            'sponsorship' => $sponsorship
        ]);
    }

    #[Route('/matches', name: 'app_dashboard_matches',  methods: ['GET'])]
    public function matches(SponsorshipRepository $sponsorshipRepository): Response{

        return $this->render('dashboard/matches.html.twig', [
            'matches' => $sponsorshipRepository->findBy(['state' => SponsorshipState::STATE_SPONSOR_APPROVED, SponsorshipState::STATE_APPROVED, SponsorshipState::STATE_STUDENT_APPROVED, SponsorshipState::STATE_INITIALIZED])
        ]);
    }

    #[Route('/match/{id}', name: 'app_dashboard_match',  methods: ['GET'])]
    public function match(Sponsorship $sponsorship): Response{

        return $this->render('dashboard/match.html.twig', [
            'match' => $sponsorship,
        ]);
    }





}
