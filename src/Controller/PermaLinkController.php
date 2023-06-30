<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PermaLinkController extends AbstractController
{
    #[Route('/perma/link', name: 'app_perma_link')]
    public function index(): Response
    {
        return $this->render('perma_link/index.html.twig', [
            'controller_name' => 'PermaLinkController',
        ]);
    }
}
