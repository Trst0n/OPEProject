<?php

namespace App\Controller;

use App\Entity\Sponsorship;
use App\Form\SponsorshipType;
use App\Repository\SponsorshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/sponsorship')]
class SponsorshipController extends AbstractController
{
    #[Route('/', name: 'app_sponsorship_index', methods: ['GET'])]
    public function index(SponsorshipRepository $sponsorshipRepository): Response
    {
        return $this->render('sponsorship/index.html.twig', [
            'sponsorships' => $sponsorshipRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_sponsorship_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SponsorshipRepository $sponsorshipRepository): Response
    {
        $sponsorship = new Sponsorship();
        $form = $this->createForm(SponsorshipType::class, $sponsorship);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sponsorshipRepository->save($sponsorship, true);

            return $this->redirectToRoute('app_sponsorship_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sponsorship/new.html.twig', [
            'sponsorship' => $sponsorship,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sponsorship_show', methods: ['GET'])]
    public function show(Sponsorship $sponsorship): Response
    {
        return $this->render('sponsorship/show.html.twig', [
            'sponsorship' => $sponsorship,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_sponsorship_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Sponsorship $sponsorship, SponsorshipRepository $sponsorshipRepository): Response
    {
        $form = $this->createForm(SponsorshipType::class, $sponsorship);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sponsorshipRepository->save($sponsorship, true);

            return $this->redirectToRoute('app_sponsorship_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sponsorship/edit.html.twig', [
            'sponsorship' => $sponsorship,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sponsorship_delete', methods: ['POST'])]
    public function delete(Request $request, Sponsorship $sponsorship, SponsorshipRepository $sponsorshipRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sponsorship->getId(), $request->request->get('_token'))) {
            $sponsorshipRepository->remove($sponsorship, true);
        }

        return $this->redirectToRoute('app_sponsorship_index', [], Response::HTTP_SEE_OTHER);
    }
}
