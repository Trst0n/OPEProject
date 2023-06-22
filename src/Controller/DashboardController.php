<?php

namespace App\Controller;

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
    public function index(SponsorshipRepository $sponsorshipRepository, StudentRepository $studentRepository, RequestRepository $requestRepository ,ProposalRepository $proposalRepository, LeadService $leadService): Response
    {
        //Liste des parrainage
        $sponsorships = $sponsorshipRepository->findAll();

        //Liste des parrainage(match en cours)
        $matchEnCours = [];

        //Liste des matchs en attente (=noMatchRequests)
        $noMatchRequests = count($requestRepository->findBy(['state' => 'valid']));

        #TODO classement par date d'inscription la plus vieille
        #TODO liens index

        foreach ($sponsorships as $sponsorship) {
            if ($sponsorship->getState() === 'initialized' || $sponsorship->getState() === 'sponsor_approved' || $sponsorship->getState() === 'student_approved') {
                $matchEnCours[] = $sponsorship;
            }
        }

        //Nb des sponsors sans match
        $noMatchProposals = count($proposalRepository->findBy(['state' => 'valid'])); //valid = compte valid, sans match ni parrainnage
        $nbproposals = count($proposalRepository->findAll());

        //Nombre de sponsor/student valide
        $proposalatdate = count($proposalRepository->findBy(['state' => 'valid']));
        $requestatdate = count($requestRepository->findBy(['state' => 'valid']));


            return $this->render('dashboard/index.html.twig', [
                'controller_name' => 'DashboardController', 'sponsorship' => $sponsorships, 'nomatchrequests' => $noMatchRequests, 'matchencours' => $matchEnCours,
                'nbproposals' => $nbproposals, 'nomatchproposal' => $noMatchProposals, 'requestsatdate' => $requestatdate, 'proposalsatdate' => $proposalatdate
            ]);
        }
}
