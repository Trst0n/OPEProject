<?php

namespace App\Controller;

use App\Repository\SponsorRepository;
use App\Repository\SponsorshipRepository;
use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_dashboard')]
    public function index(SponsorshipRepository $sponsorshipRepository, StudentRepository $studentRepository, SponsorRepository $sponsorRepository): Response
    {
        //Liste des etudiants sans match
        $students = $studentRepository->findAll();
        $sponsors = $sponsorRepository->findAll();

        $noMatchStudents = [];

        #TODO classement par date d'inscription la plus vieille
        #TODO liens index

        foreach ($students as $student) {
            if ($student->getSponsorship() === null && $student->getState() === 'valid') {
                $noMatchStudents[] = $student;
            }
        }

        //Nb des sponsors sans match
        $noMatchSponsors = count($sponsorRepository->findBy(['state' => 'valid', 'sponsorship' => null]));

        //Nombre de sponsor/student valide
        $sponsoratdate = count($sponsorRepository->findBy(['state' => 'valid']));
        $studentatdate = count($studentRepository->findBy(['state' => 'valid']));


            return $this->render('dashboard/index.html.twig', [
                'controller_name' => 'DashboardController', 'sponsorship' => $sponsorshipRepository->findAll(), 'nomatchstudents' => $noMatchStudents, 'students' => $students,
                'sponsors' => $sponsors, 'nomatchsponsor' => $noMatchSponsors, 'studentatdate' => $studentatdate, 'sponsoratdate' => $sponsoratdate
            ]);
        }
}
