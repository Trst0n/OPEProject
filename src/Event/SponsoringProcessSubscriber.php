<?php

namespace App\Event;

use App\Enum\Civility;
use App\Enum\LeadState;
use App\Service\Mailing;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Workflow\Event\TransitionEvent;

class SponsoringProcessSubscriber implements EventSubscriberInterface
{

    public function __construct(private Mailing $mailing)
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

    }


    public function handleStudentValidate(TransitionEvent $event): void     //PHASE 2: L'ETUDIANT CONFIRME LA PRISE DE CONTACT
    {
        $sponsorship = $event->getSubject();

        $student = $sponsorship->getSponsorRequest();
        $student->setState(LeadState::MATCH_APPROVED);
    }

    public function handleSponsorValidate(TransitionEvent $event): void     // PHASE 2.1: LE PARRAIN CONFIRME LA PRISE DE CONTACT
    {
        $sponsorship = $event->getSubject();

        $sponsor = $sponsorship->getSponsorProposal();
        $sponsor->setState(LeadState::MATCH_APPROVED);
    }

    public function handleSponsorship(TransitionEvent $event): void     // PHASE 3: LA DEUXIEME PERSONNE VALIDE LA PRISE DE CONTACT
    {
        $sponsorship = $event->getSubject();

        $sponsor = $sponsorship->getSponsorProposal();
        $sponsor->setState(LeadState::SPONSORSHIP);

        $student = $sponsorship->getSponsorRequest();
        $student->setState(LeadState::SPONSORSHIP);

    }

    public function handleEnding(TransitionEvent $event): void     // PHASE 4: LE PARRAINAGE PREND FIN
    {
        $sponsorship = $event->getSubject();

        $sponsor = $sponsorship->getSponsorProposal();
        $sponsor->setState(LeadState::REGISTERED);
        $this->mailing->sendEmail($sponsor->getPerson()->getEmail(), "Votre parrainage a pris fin", 'mail/sponsor-ending.html.twig');

        $student = $sponsorship->getSponsorRequest();
        $student->setState(LeadState::OUTDATED);
        $this->mailing->sendEmail($student->getPerson()->getEmail(), "Votre parrainage a pris fin", 'mail/student-ending.html.twig');

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
