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
use App\Repository\SponsorshipRepository;
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

        $jsvar = [];

        //Variables pour le code js => donnée tableau de personne
        foreach($personRepository->findAll() as $person) {
            $jsvar[]= ["id" => $person->getId(), "firstname"=>$person->getFirstname(),"lastname"=>$person->getLastname(), "createAt" => $person->getCreatedAt()->format("d-m-Y"), "email" => $person->getEmail()
            , "phonenumber" => $person->getPhonenumber(), "status" => ($person instanceof Student ? "Étudiant" : "Parrain")];
        }


        $personsname = [];

        foreach($personRepository->findAll() as $person){
            $personsname[] = $person->getFirstname(). " " . $person->getLastname();
        }

        return $this->render('dashboard/users/persons.html.twig', [
            'persons' => $personRepository->findAll(), 'student' => Student::class, 'personsnames' => $personsname, 'jsvar' => $jsvar
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









}
