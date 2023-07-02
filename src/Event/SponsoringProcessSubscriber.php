<?php

namespace App\Event;

use App\Enum\Civility;
use App\Enum\LeadState;
use App\Service\Mailing;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Workflow\Event\TransitionEvent;

class SponsoringProcessSubscriber implements EventSubscriberInterface
{

    public function __construct(private Mailing $mailing,  private LoggerInterface $historyLogger)
    {
    }

    public function handleToMatch(TransitionEvent $event): void  // PHASE 1 : LE MATCH EST VALIDE PAR L'ADMIN
    {
        $sponsorship = $event->getSubject();

        $sponsor = $sponsorship->getSponsorProposal();
        $sponsor->setState(LeadState::MATCHED);

        $student = $sponsorship->getSponsorRequest();
        $student->setState(LeadState::MATCHED);

        $this->mailing->sendEmail($sponsor->getPerson()->getEmail(), "Nouveau match!", 'mail/sponsor-match.html.twig', [ 'civility' => ( $sponsor->getCivility() === Civility::Men ? "Mr." : "Mme." ), 'lastname' => $sponsor->getPerson()->getLastname(), 'student' => $student]);
        $this->mailing->sendEmail($student->getPerson()->getEmail(), "Nouveau match!", 'mail/student-match.html.twig', ['firstname' => $student->getPerson()->getFirstname(), 'sponsor' => $sponsor]);

        $this->historyLogger->info((new \DateTime())->format('Y-m-d H:i:s') . " : Un match entre le parrain " . $sponsor->getPerson()->getFirstname() . " et l'étudiant " . $sponsor->getPerson()->getLastname() . "a été validé par ". $sponsorship->getAdministrator()->getUsername() .".");
        $this->historyLogger->info((new \DateTime())->format('Y-m-d H:i:s') . " : Un email à été envoyé à l'utilisateur " . $sponsor->getPerson()->getFirstname() . " " . $sponsor->getPerson()->getLastname().".");
        $this->historyLogger->info((new \DateTime())->format('Y-m-d H:i:s') . " : Un email à été envoyé à l'utilisateur " . $student->getPerson()->getFirstname() . " " . $student->getPerson()->getLastname().".");

        $student->addActivity((new \DateTime())->format('Y-m-d H:i:s') . " : Nouveau match avec ".$sponsor->getPerson()->getFirstname() . " " . $sponsor->getPerson()->getLastname()." (parrain) validé par ".$sponsorship->getAdministrator()->getUsername().". Un email à été envoyé à l'utilisateur. ");
        $sponsor->addActivity((new \DateTime())->format('Y-m-d H:i:s') . " : Nouveau match avec ".$student->getPerson()->getFirstname() . " " . $student->getPerson()->getLastname()." (étudiant)validé par ".$sponsorship->getAdministrator()->getUsername().". Un email à été envoyé à l'utilisateur. ");
    }


    public function handleStudentValidate(TransitionEvent $event): void     //PHASE 2: L'ETUDIANT CONFIRME LA PRISE DE CONTACT
    {
        $sponsorship = $event->getSubject();

        $student = $sponsorship->getSponsorRequest();
        $student->setState(LeadState::MATCH_APPROVED);

        $this->historyLogger->info((new \DateTime())->format('Y-m-d H:i:s') . " : " . $student->getPerson()->getFirstname() . " " . $student->getPerson()->getLastname() . " a confirmé la prise de contact pour son parrainage ");
        $student->addActivity((new \DateTime())->format('Y-m-d H:i:s') . " : L'utilisateur a validé la prise de contact avec son parrain ". $sponsorship->getSponsorProposal()->getPerson()->getFirstname() . " " . $sponsorship->getSponsorProposal()->getPerson()->getLastname() . " .");
    }

    public function handleSponsorValidate(TransitionEvent $event): void     // PHASE 2.1: LE PARRAIN CONFIRME LA PRISE DE CONTACT
    {
        $sponsorship = $event->getSubject();

        $sponsor = $sponsorship->getSponsorProposal();
        $sponsor->setState(LeadState::MATCH_APPROVED);

        $this->historyLogger->info((new \DateTime())->format('Y-m-d H:i:s') . " : " . $sponsor->getPerson()->getFirstname() . " " . $sponsor->getPerson()->getLastname() . " a confirmé la prise de contact pour son parrainage ");
        $sponsor->addActivity((new \DateTime())->format('Y-m-d H:i:s') . " : L'utilisateur a validé la prise de contact avec son étudiant ". $sponsorship->getSponsorRequest()->getPerson()->getFirstname() . " " . $sponsorship->getSponsorRequest()->getPerson()->getLastname() . " .");

    }

    public function handleSponsorship(TransitionEvent $event): void     // PHASE 3: LA DEUXIEME PERSONNE VALIDE LA PRISE DE CONTACT
    {
        $sponsorship = $event->getSubject();

        $sponsor = $sponsorship->getSponsorProposal();
        $sponsor->setState(LeadState::SPONSORSHIP);

        $student = $sponsorship->getSponsorRequest();
        $student->setState(LeadState::SPONSORSHIP);

        $this->historyLogger->info((new \DateTime())->format('Y-m-d H:i:s') . " : Le parrainage entre ".$sponsor->getPerson()->getFirstname() . " " . $sponsor->getPerson()->getLastname() . " et ". $student->getPerson()->getFirstname() . " " . $student->getPerson()->getLastname() . " vient de débuter.");
        $student->addActivity((new \DateTime())->format('Y-m-d H:i:s') . " : Les deux utilisateurs viennent de confirmé la prise de contact, le parrainage vient de commencer !");
        $sponsor->addActivity((new \DateTime())->format('Y-m-d H:i:s') . " : Les deux utilisateurs viennent de confirmé la prise de contact, le parrainage vient de commencer !");


    }

    public function handleEnding(TransitionEvent $event): void     // PHASE 4: LE PARRAINAGE PREND FIN
    {
        $sponsorship = $event->getSubject();

        $sponsor = $sponsorship->getSponsorProposal();
        $sponsor->setState(LeadState::REGISTERED);
        $this->mailing->sendEmail($sponsor->getPerson()->getEmail(), " : Votre parrainage a pris fin", 'mail/sponsor-ending.html.twig');

        $student = $sponsorship->getSponsorRequest();
        $student->setState(LeadState::OUTDATED);
        $this->mailing->sendEmail($student->getPerson()->getEmail(), " : Votre parrainage a pris fin", 'mail/student-ending.html.twig');

        $this->historyLogger->info((new \DateTime())->format('Y-m-d H:i:s') . " : Le parrainage entre ".$sponsor->getPerson()->getFirstname() . " " . $sponsor->getPerson()->getLastname() . " et ". $student->getPerson()->getFirstname() . " " . $student->getPerson()->getLastname() . " vient de prendre fin.");

        $student->addActivity((new \DateTime())->format('Y-m-d H:i:s') . " : Fin du parrainage entre ".$sponsor->getPerson()->getFirstname() . " " . $sponsor->getPerson()->getLastname() . " et ". $student->getPerson()->getFirstname() . " " . $student->getPerson()->getLastname().".");
        $sponsor->addActivity((new \DateTime())->format('Y-m-d H:i:s') . " : Fin du parrainage entre ".$sponsor->getPerson()->getFirstname() . " " . $sponsor->getPerson()->getLastname() . " et ". $student->getPerson()->getFirstname() . " " . $student->getPerson()->getLastname().".");

    }

    public static function getSubscribedEvents(): array
    {
        return [
            'workflow.sponsoring_process.transition.to_match' => 'handleToMatch',
            'workflow.sponsoring_process.transition.st_approve' => 'handleStudentValidate',
            'workflow.sponsoring_process.transition.sp_approve' => 'handleSponsorValidate',
            'workflow.sponsoring_process.transition.to_conclude' => 'handleSponsorship',
            'workflow.sponsoring_process.transition.to_end' => 'handleEnding',
        ];
    }


}
