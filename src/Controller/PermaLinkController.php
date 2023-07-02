<?php

namespace App\Controller;

use App\Entity\Lead;
use App\Entity\Proposal;
use App\Entity\Request;
use App\Entity\Person;
use App\Entity\Sponsorship;
use App\Entity\SponsorshipState;
use App\Entity\SponsorshipTransition;
use App\Enum\LeadState;
use App\Repository\PersonRepository;
use App\Repository\SponsorshipRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Workflow\WorkflowInterface;

class PermaLinkController extends AbstractController
{
    #[Route('/generate', name: 'app_perma_link_generate')]
    public function urlGenerate(Person $person): Response
    {


        return $this->render('perma_link/index.html.twig', [
            'controller_name' => 'PermaLinkController',
        ]);
    }

    #[Route('/info/{tkn}', name: 'app_perma_link')]
    public function accountinfo(PersonRepository $personRepository, Request $request): Response
    {
        $token = $request->request->get('tkn');

        if ($this->isCsrfTokenValid('login', $token)) {
            // redirect
        }


        return $this->render('perma_link/index.html.twig', [
            'controller_name' => 'PermaLinkController',
        ]);
    }

    #[Route('/yes/{id}/{sp_id}', name: 'app_permalink_emailredirect')]
    public function emailRedirect(Lead $lead, #[MapEntity(expr: 'repository.find(sp_id)')] Sponsorship $sponsorship, EntityManagerInterface $manager,WorkflowInterface $sponsoringProcessStateMachine): Response
    {
        $lead->setState(LeadState::MATCH_APPROVED);

        //Le parrainage a déjà été 'accepté' par l'autre personne
        if($sponsorship->getState() == SponsorshipState::STATE_STUDENT_APPROVED || $sponsorship->getState() == SponsorshipState::STATE_SPONSOR_APPROVED){
            $sponsoringProcessStateMachine->apply($sponsorship, SponsorshipTransition::TRANSITION_TO_SPONSORSHIP);
        }
        else{
            if($lead instanceof Request){
                $sponsoringProcessStateMachine->apply($sponsorship, SponsorshipTransition::TRANSITION_ST_APPROVE);
            }
            else{
                $sponsoringProcessStateMachine->apply($sponsorship, SponsorshipTransition::TRANSITION_SP_APPROVE);
            }
        }

        $manager->flush();
        return $this->redirectToRoute('app_permalink_confirmation');
    }

    #[Route('/confirm', name: 'app_permalink_confirmation')]
    public function confirmation(): Response
    {
        return $this->render('perma_link/confirmation.html.twig', [
        ]);
    }

}
