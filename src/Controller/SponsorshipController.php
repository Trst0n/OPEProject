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

}
