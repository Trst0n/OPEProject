<?php

namespace App\Controller;

use App\Entity\Proposal;
use App\Entity\Request;
use App\Entity\Sponsorship;
use App\Entity\SponsorshipState;
use App\Entity\Student;
use App\Enum\LeadState;
use App\Repository\ProposalRepository;
use App\Repository\SponsorshipRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Workflow\Registry;
use Symfony\Component\Workflow\WorkflowInterface;

class SponsorshipController extends AbstractController
{
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

        $sponsoringProcessStateMachine->apply($sponsorship, 'to_match');
        $request = $sponsorship->getSponsorRequest();
        $entityManager -> flush();

        foreach($request->getSponsorship() as $sponsorship){     /** on libere les parrains qui n'ont pas été choisis */
            if($sponsorship->getState() === "initialized"){
                $entityManager->remove($sponsorship);
            }
        }

        $this->addFlash('success', "Le parrainage a bien été pris en compte");
        return $this->redirectToRoute('app_dashboard');
    }
}
