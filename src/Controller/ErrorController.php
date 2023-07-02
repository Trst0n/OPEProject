<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ErrorController extends AbstractController {

    #[Route('/error404', name: 'app_error', methods: ['GET'])]
    public function show404(): Response
    {
        return $this->render('dashboard/error/error404.html.twig');
    }

    #[Route('/error403', name: 'app_error', methods: ['GET'])]
    public function show403(): Response
    {
        return $this->render('dashboard/error/error403.html.twig');
    }
}