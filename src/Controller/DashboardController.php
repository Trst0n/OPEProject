<?php

namespace App\Controller;

use App\Entity\LeadState;
use App\Repository\ProposalRepository;
use App\Repository\RequestRepository;
use App\Repository\SponsorRepository;
use App\Repository\SponsorshipRepository;
use App\Repository\StudentRepository;
use App\Service\LeadService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_dashboard')]
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
}
