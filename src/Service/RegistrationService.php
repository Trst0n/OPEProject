<?php

namespace App\Service;

use App\Entity\Proposal;
use App\Entity\Request;
use App\Entity\Sponsor;
use App\Entity\SponsorshipState;
use App\Entity\SponsorshipTransition;
use App\Entity\Student;
use App\Enum\LeadState;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Workflow\WorkflowInterface;

class RegistrationService
{

    public function __construct(private WorkflowInterface $sponsoringProcessStateMachine,private EntityManagerInterface $entityManager, private FindEntity $service, private ValidatorInterface $validator)
    {
    }

    public function register(array $data, string $type): bool
    {
        switch ($type){

            case "sponsor":
                $sponsorRepository = $this->entityManager->getRepository(Sponsor::class);
                $person = $sponsorRepository->findOneBy(['email' => $data['email']]);

                if(!$person){
                    $person= new Sponsor();
                    $person->setFirstname($data['firstname'])->setLastname($data['lastname'])->setPhonenumber($data['phonenumber'])->setEmail($data['email'])
                        ->setBirthdate(DateTime::createFromFormat('m-d-Y', "01-01-2001"))
                        ->setUpdatedAt()->setCreatedAt();

                    if(!$this->validator->validate($person)) {
                        return false;
                    }

                    $this->entityManager->persist($person);
                }

                /** Création des nouveaux profils */
                $newProposals = [];
                for ($i = 0; $i < $data['numStudent']; $i++) {
                    $updatedProposal = new Proposal();
                    $updatedProposal->setCity($this->service->getCity($data['city']))->setWorkfield($this->service->getFields($data['workfield']))->setWishes($this->service->getWishes($data['wishes']))
                        ->setLanguages($this->service->getLanguages($data['languages']))->setCivility($this->service->getCiviity($data['civility']));

                    $person->addLead($updatedProposal);

                    if(!$this->validator->validate($updatedProposal)) {
                        return false;
                    }
                    $newProposals[]=$updatedProposal->getId();
                    $updatedProposal->addActivity(  (new \DateTime())->format('Y-m-d H:i:s') . " : Création d'un nouveau profil de parrain.");

                    $this->entityManager->persist($updatedProposal);


                }

                foreach ($person->getLeads() as $lead){
                    if(! in_array($lead->getId(), $newProposals)){
                        $lead->setState(LeadState::OUTDATED);
                        foreach( $lead->getSponsorship() as $sponsorship){
                            if($sponsorship->getState() == SponsorshipState::STATE_INITIALIZED){
                                $this->entityManager->remove($sponsorship);
                            }
                            else{
                                $this->sponsoringProcessStateMachine->apply($sponsorship, SponsorshipTransition::TRANSITION_TO_END);
                            }
                        }
                    }
                }
                $this->entityManager->flush();

                return true;

            case "student":
                $studentRepository = $this->entityManager->getRepository(Student::class);
                $person = $studentRepository->findOneBy(['email' => $data['email']]);

                if(!$person){
                    $person = new Student();
                    $person->setFirstname($data['firstname'])->setLastname($data['lastname'])->setPhonenumber($data['phonenumber'])->setEmail($data['email'])
                        ->setBirthdate(DateTime::createFromFormat('m-d-Y', $data['birthdate']))->setUpdatedAt()
                        ->setCreatedAt();

                    if(!$this->validator->validate($person)) {
                        return false;
                    }

                    $this->entityManager->persist($person);
                }

                $updatedRequest = new Request();
                $updatedRequest->setCity($this->service->getCity($data['city']))
                    ->setCurriculum($this->service->getCurriculum($data['curriculum']))->setWishes($this->service->getWishes($data['wishes']))
                    ->setLanguages($this->service->getLanguages($data['languages']))->setCivility($this->service->getCiviity($data['civility']));

                $person->addLead($updatedRequest);

                if(!$this->validator->validate($updatedRequest)) {
                    return false;
                }

                $updatedRequest->addActivity(  (new \DateTime())->format('Y-m-d H:i:s') . " : Création d'un nouveau profil de étudiant.");

                $this->entityManager->persist($updatedRequest); // flush de l'entité

                foreach ($person->getLeads() as $lead){
                    if($lead->getId() != $updatedRequest->getId()){
                        $lead->setState(LeadState::OUTDATED);
                        foreach( $lead->getSponsorship() as $sponsorship){
                            if($sponsorship->getState() == SponsorshipState::STATE_INITIALIZED){
                                $this->entityManager->remove($sponsorship);
                            }
                            else{
                                $this->sponsoringProcessStateMachine->apply($sponsorship, SponsorshipTransition::TRANSITION_TO_END);
                            }
                        }
                    }
                }
                $this->entityManager->flush();
                return true;

        }
        return false;
    }
}