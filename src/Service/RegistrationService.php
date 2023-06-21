<?php

namespace App\Service;

use App\Entity\Lead;
use App\Entity\Person;
use App\Entity\Proposal;
use App\Entity\Request;
use App\Entity\Sponsor;
use App\Entity\Student;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;

class RegistrationService
{

    public function __construct(private EntityManagerInterface $entityManager, private FindEntity $service,private DataValidator $dataValidator)
    {
    }

    public function register(array $data, string $type): bool
    {
        if($this->dataValidator->validate($data,$type)) {

            $StudentRepository = $this->entityManager->getRepository(Student::class);
            $SponsorRepository = $this->entityManager->getRepository(Sponsor::class);
            $LeadRepository = $this->entityManager->getRepository(Lead::class);


            if($type === "sponsor"){
                $person = $SponsorRepository->findOneBy(['firstname' => $data['firstname'], 'lastname' => $data['lastname'], 'email' => $data['email']]);
            }
            else{
                $person = $StudentRepository->findOneBy(['firstname' => $data['firstname'], 'lastname' => $data['lastname'], 'email' => $data['email']]);
            }

            $ProposalRepository = $this->entityManager->getRepository(Proposal::class);
            $RequestRepository = $this->entityManager->getRepository(Request::class);

            /** Si la personne existe deja dans la bd: màj des profils déjà existant */
            if ($person) {
                switch ($type) {
                    case "sponsor":
                        $proposals = $ProposalRepository->findBy(['person' => $person, 'state' => 'valid']);

                        foreach ($proposals as $proposal) {
                            $proposal->setState('outdated');
                            /** Màj du statut à 'obsolète' pour le ou les differents profil sponsor*/
                        }
                        break;

                    case "student":
                        $request = $RequestRepository->findOneBy(['person' => $person, 'state' => 'valid']);
                        $request->setState('outdated');
                        /** Màj du status à 'obsolète' */
                        break;
                }

            }


            /** Création des profils étudiant/parrain (+ person ) */
            switch ($type) {
                case "sponsor":

                    if (!$person) { // si le profil de personne n'existe pas
                        $person= new Sponsor();
                        $person->setFirstname($data['firstname'])->setLastname($data['lastname'])->setPhonenumber($data['phonenumber'])->setEmail($data['email'])
                            ->setBirthdate(DateTime::createFromFormat('m-d-Y', "01-01-2001"))->setCivility($this->service->getCiviity($data['civility']))
                            ->setUpdatedAt(new \DateTimeImmutable())->setCreatedAt(new \DateTimeImmutable());

                        $SponsorRepository->save($person, true); //flush
                    }

                    for ($i = 0; $i < $data['numStudent']; $i++) {
                        $updatedProposal = new Proposal();
                        $updatedProposal->setCity($this->service->getCity($data['city']))->setWorkfield($this->service->getFields($data['workfield']))->setWishes($this->service->getWishes($data['wishes']))
                            ->setLanguages($this->service->getLanguages($data['languages']));

                        $person->setUpdatedAt(new \DateTimeImmutable())->addLead($updatedProposal);
                        $ProposalRepository->save($updatedProposal, true); // flush de l'entité
                    }
                    return true;

                case "student":

                    if (!$person) { // si le profil de personne n'existe pas
                        $person = new Student();
                        $person->setFirstname($data['firstname'])->setLastname($data['lastname'])->setPhonenumber($data['phonenumber'])->setEmail($data['email'])
                            ->setBirthdate(DateTime::createFromFormat('m-d-Y', $data['birthdate']))->setCivility($this->service->getCiviity($data['civility']))
                            ->setUpdatedAt(new \DateTimeImmutable())->setCreatedAt(new \DateTimeImmutable());

                        $StudentRepository->save($person, true); //flush
                    }

                    $updatedRequest = new Request();
                    $updatedRequest->setCity($this->service->getCity($data['city']))
                        ->setCurriculum($this->service->getCurriculum($data['curriculum']))->setWishes($this->service->getWishes($data['wishes']))
                        ->setLanguages($this->service->getLanguages($data['languages']));

                    $person->setUpdatedAt(new \DateTimeImmutable())->addLead($updatedRequest);
                    $RequestRepository->save($updatedRequest, true); // flush de l'entité

                    return true;

            }
        }
        return false;
    }
}