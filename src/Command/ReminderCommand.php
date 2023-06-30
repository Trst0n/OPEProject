<?php
namespace App\Command;

use App\Entity\Proposal;
use App\Entity\SponsorshipState;
use App\Enum\Civility;
use App\Repository\SponsorshipRepository;
use App\Service\Mailing;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

// the name of the command is what users type after "php bin/console"
#[AsCommand(name: 'app:send-reminder')]
class ReminderCommand extends Command
{
    public function __construct( private SponsorshipRepository $sponsorshipRepository, private Mailing $mailing)
    {
        parent::__construct();
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // ENVOI DE MAIL A TOUS LES UTILISATEURS QUI SONT EN PARRAINAGE TOUS LES 2 MOIS;

        $sponsors = [];
        $students = [];

        foreach ($this->sponsorshipRepository->findBy(['state' => SponsorshipState::STATE_SPONSORSHIP]) as $sponsorship){
            if(date_diff(new \DateTimeImmutable(), $sponsorship->getUpdatedAt())->format("%a")%61 == 0){
                $sponsors[] = $sponsorship->getSponsorRequest();
                $students[] = $sponsorship->getSponsorProposal();
            }
        }

        foreach ($sponsors as $sponsor){
            $this->mailing->sendEmail($sponsor->getPerson()->getEmail(), "Rappel concernant votre parrainage", "mail/sponsor-reminder.html.twig",
            ['civility' => ($sponsor->getCivility() == Civility::Men ? "Mr." : "Mme."), 'lastname' => $sponsor->getPerson()->getLastname()]);
        }

        foreach ($students as $student){
            $this->mailing->sendEmail($student->getPerson()->getEmail(), "Rappel concernant votre parrainage", "mail/student-reminder.html.twig",
            ['lastname' => $student->getPerson()->getLastname()]);
        }

        // ENVOI DES RAPPELS POUR LES MATCHS TOUTES LES 2 SEMAINES

        $students = [];
        $sponsors = [];

        foreach ($this->sponsorshipRepository->findBy(['state' => SponsorshipState::STATE_STUDENT_APPROVED]) as $sponsorship){
            if(date_diff(new \DateTimeImmutable(), $sponsorship->getUpdatedAt())->format("%a")%14 == 0){
                $sponsors[] = $sponsorship->getSponsorProposal();
            }
        }

        foreach ($this->sponsorshipRepository->findBy(['state' => SponsorshipState::STATE_SPONSOR_APPROVED]) as $sponsorship){
            if(date_diff(new \DateTimeImmutable(), $sponsorship->getUpdatedAt())->format("%a")%14 == 0){
                $students[] = $sponsorship->getSponsorRequest();
            }
        }

        foreach ($sponsors as $sponsor){
            $this->mailing->sendEmail($sponsor->getPerson()->getEmail(), "Rappel concernant votre parrainage", "mail/sponsor-match-reminder.html.twig",
                ['civility' => ($sponsor->getCivility() == Civility::Men ? "Mr." : "Mme."), 'lastname' => $sponsor->getPerson()->getLastname()]);
        }

        foreach ($students as $student){
            $this->mailing->sendEmail($student->getPerson()->getEmail(), "Rappel concernant votre parrainage", "mail/student-match-reminder.html.twig",
                ['lastname' => $student->getPerson()->getLastname()]);
        }

        return Command::SUCCESS;

    }
}