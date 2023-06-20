<?php

namespace App\Service;

use App\Entity\Person;
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

            $PersonRepository = $this->entityManager->getRepository(Person::class);
            $person = $PersonRepository->findOneBy(['firstname' => $data['firstname'], 'lastname' => $data['lastname'], 'email' => $data['email']]);

            $SponsorRepository = $this->entityManager->getRepository(Sponsor::class);
            $StudentsRepository = $this->entityManager->getRepository(Student::class);

            /** Si la personne existe deja dans la bd: màj des profils déjà existant */
            if ($person) {
                #TODO Valider les données avant de changer les statuts
                switch ($type) {
                    case "sponsor":
                        $sponsors = $SponsorRepository->findBy(['person' => $person, 'state' => 'valid']);

                        foreach ($sponsors as $sponsor) {
                            $sponsor->setState('outdated');
                            /** Màj du statut à 'obsolète' pour le ou les differents profil sponsor*/
                        }
                        break;

                    case "student":
                        $student = $StudentsRepository->findOneBy(['person' => $person, 'state' => 'valid']);
                        $student->setState('outdated');
                        /** Màj du status à 'obsolète' */

                        break;
                }

            }
            if (!$person) {
                $type === "sponsor" ? $birthdate = "01-01-2001" : $birthdate = $data['birthdate']; //Date d'anniversaire bidon pour le parrain car non demandée
                $person = new Person();
                $person->setFirstname($data['firstname'])->setLastname($data['lastname'])->setPhonenumber($data['phonenumber'])->setEmail($data['email'])
                    ->setBirthdate(DateTime::createFromFormat('m-d-Y', $birthdate))->setCivility($this->service->getCiviity($data['civility']))
                    ->setUpdatedAt(new \DateTimeImmutable())->setCreatedAt(new \DateTimeImmutable());

                $PersonRepository->save($person, true); //flush
            }

            /** Création des profils étudiant/parrain */
            switch ($type) {
                case "sponsor":

                    for ($i = 0; $i < $data['numStudent']; $i++) {
                        $updatedSponsor = new Sponsor();
                        $updatedSponsor->setCity($this->service->getCity($data['city']))->setWorkfield($this->service->getFields($data['workfield']))->setWishes($this->service->getWishes($data['wishes']))
                            ->setLanguages($this->service->getLanguages($data['languages']));

                        $person->setUpdatedAt(new \DateTimeImmutable())->addSponsorProposal($updatedSponsor);
                        $SponsorRepository->save($updatedSponsor, true); // flush de l'entité
                    }

                    return true;

                case "student":

                    $updatedStudent = new Student();
                    $updatedStudent->setCity($this->service->getCity($data['city']))->setEstablishment($this->service->getEstablishment($data['establishment']))
                        ->setCurriculum($this->service->getCurriculum($data['curriculum']))->setWishes($this->service->getWishes($data['wishes']))
                        ->setLanguages($this->service->getLanguages($data['languages']));

                    $person->setUpdatedAt(new \DateTimeImmutable())->addSupportRequest($updatedStudent);
                    $StudentsRepository->save($updatedStudent, true); // flush de l'entité

                    return true;

            }
        }
        return false;
//
//        if($person) { /** Si la personne existe deja dans notre BD */
//            switch ($type) {
//                case "sponsor":
//                    $SponsorRepository = $this->entityManager->getRepository(Sponsor::class);
//                    $sponsors = $SponsorRepository->findBy(['firstname' => $data['firstname'], 'lastname' => $data['lastname'], 'email' => $data['email'], 'state' => 'valid']);
//
//                    foreach($sponsors as $sponsor){
//                        $sponsor->setState('outdated'); /** Màj du statut à 'obsolète' pour le ou les differents profil sponsor*/
//                    }
//
//                    /** création d'un nouveau profil sponsor */
//
//                    for($i=0; $i<$data['numStudent']; $i++){
//                        $updatedSponsor = new Sponsor();
//                        $updatedSponsor->setCity($this->service->getCity($data['city']))->setWorkfield($this->service->getFields($data['workfield']))->setWishes($this->service->getWishes($data['wishes']))
//                            ->setLanguages($this->service->getLanguages($data['languages']));
//
//                        $SponsorRepository->save($updatedSponsor, true); // flush de l'entité
//
//                        $person->setUpdatedAt(new \DateTimeImmutable())->addSponsorProposal($updatedSponsor);
//                    }
//
//                    return true;
//
//                case "student":
//                    $StudentsRepository = $this->entityManager->getRepository(Student::class);
//                    $student = $StudentsRepository->findOneBy(['firstname' => $data['firstname'], 'lastname' => $data['lastname'], 'email' => $data['email']]);
//                    $student->setState('outdated'); /** Màj du status à 'obsolète' */
//
//                    /** création d'un nouveau profil étudiant */
//
//                    $updatedStudent = new Student();
//                    $updatedStudent->setCity($this->service->getCity($data['city']))->setEstablishment($this->service->getEstablishment($data['establishment']))
//                        ->setCurriculum($this->service->getCurriculum($data['curriculum']))->setWishes($this->service->getWishes($data['wishes']))
//                        ->setLanguages($this->service->getLanguages($data['languages']));
//
//                    $StudentsRepository->save($updatedStudent, true); // flush de l'entité
//
//                    $person->setUpdatedAt(new \DateTimeImmutable())->addSupportRequest($updatedStudent);
//
//                    return true;
//            }
//        }
//        else{
//            switch ($type){
//                case "sponsor":
//                    $SponsorRepository = $this->entityManager->getRepository(Sponsor::class);
//
//                    // Création de la personne
//                    $newperson = new Person();
//                    $newperson->setFirstname($data['firstname'])->setLastname($data['lastname'])->setPhonenumber($data['phonenumber'])->setEmail($data['email'])
//                        ->setBirthdate(DateTime::createFromFormat('m-d-Y', "00-00-0000"))->setCivility($this->service->getCiviity($data['civility']))
//                        ->setUpdatedAt(new \DateTimeImmutable())->setCreatedAt(new \DateTimeImmutable());
//
//                    // Création de son profil sponsor
//                    for($i=0; $i<$data['numStudent']; $i++){
//                        $updatedSponsor = new Sponsor();
//                        $updatedSponsor->setCity($this->service->getCity($data['city']))->setWorkfield($this->service->getFields($data['workfield']))->setWishes($this->service->getWishes($data['wishes']))
//                            ->setLanguages($this->service->getLanguages($data['languages']));
//
//                        $SponsorRepository->save($updatedSponsor, true); // flush de l'entité
//
//                        $newperson->setUpdatedAt(new \DateTimeImmutable())->addSponsorProposal($updatedSponsor);
//                    }
//
//                    return true;
//                case "student":
//                    $student = new Student();
//                    $student->setFirstname($data[])->setLastname($data[])->setPhonenumber($data[])->setEmail($data[])->setBirthdate(DateTime::createFromFormat('m-d-Y', $data['birthdate']))->setCivility($this->service->getCiviity($data['civility']))->setCity($this->service->getCity($data['city']))
//                        ->setCurriculum($data[])->setEstablishment($this->service->getEstablishment($data['establishment']))->setLanguages($this->service->getLanguages($data['languages']))->setWishes($this->service->getWishes($data['wishes']))
//                        ->setUpdatedAt(new \DateTimeImmutable())->setCreatedAt(new \DateTimeImmutable());
//
//                    return true;
//
//            }
//        }
//        return false; /** argument non valide */
//    }
    }
}