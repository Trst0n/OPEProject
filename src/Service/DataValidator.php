<?php

namespace App\Service;

use App\Entity\Person;
use App\Entity\Sponsor;
use App\Entity\Student;
use DateTime;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class DataValidator
{
    public function __construct(private ValidatorInterface $validator, private FindEntity $service)
    {
    }

    public function validate(array $data, string $type): bool
    {

        // Vérfification de l'existance des champs création d'un personne
        $valid = array_key_exists("firstname", $data) && array_key_exists("lastname", $data) && array_key_exists("email", $data)
            && array_key_exists("civility", $data) && array_key_exists("phonenumber", $data);

        switch($type){
            case "sponsor":

                // vérification de tout les champs specifique au sponsor
                 $valid = $valid && array_key_exists("workfield", $data) && array_key_exists("numStudent", $data) &&  array_key_exists("wishes", $data)
                     &&  array_key_exists("languages", $data) && array_key_exists("city", $data);

                 $valid = $valid && ($data['numStudent'] === 1 || $data['numStudent'] === 2);

                 if($valid){
                     $persontest = new Person();
                     $persontest->setFirstname($data['firstname'])->setLastname($data['lastname'])->setPhonenumber($data['phonenumber'])->setEmail($data['email'])
                         ->setBirthdate(DateTime::createFromFormat('m-d-Y', "01-01-2001"))->setCivility($this->service->getCiviity($data['civility']))
                         ->setUpdatedAt(new \DateTimeImmutable())->setCreatedAt(new \DateTimeImmutable());
                     $sponsortest = new Sponsor();
                     $sponsortest->setCity($this->service->getCity($data['city']))->setWorkfield($this->service->getFields($data['workfield']))->setWishes($this->service->getWishes($data['wishes']))
                         ->setLanguages($this->service->getLanguages($data['languages']));
                 }

                 // Validation des entités tests
                 $valid = $valid && (count($this->validator->validate($sponsortest)) === 0) && (count($this->validator->validate($persontest)) === 0);
                 break;

            case "student":

                // vérification de tout les champs specifique au student
                $valid = $valid && array_key_exists("birthdate", $data) && array_key_exists("establishment", $data) &&  array_key_exists("wishes", $data)
                    &&  array_key_exists("languages", $data) && array_key_exists("city", $data) && array_key_exists("curriculum", $data) ;

                if($valid){
                    $persontest = new Person();
                    $persontest->setFirstname($data['firstname'])->setLastname($data['lastname'])->setPhonenumber($data['phonenumber'])->setEmail($data['email'])
                        ->setBirthdate(DateTime::createFromFormat('m-d-Y', $data['birthdate']))->setCivility($this->service->getCiviity($data['civility']))
                        ->setUpdatedAt(new \DateTimeImmutable())->setCreatedAt(new \DateTimeImmutable());
                    $studenttest = new Student();
                    $studenttest->setCity($this->service->getCity($data['city']))->setEstablishment($this->service->getEstablishment($data['establishment']))
                        ->setCurriculum($this->service->getCurriculum($data['curriculum']))->setWishes($this->service->getWishes($data['wishes']))
                        ->setLanguages($this->service->getLanguages($data['languages']));
                }

                // Validation des entités tests
                $valid = $valid && (count($this->validator->validate($studenttest)) === 0) && (count($this->validator->validate($persontest)) === 0);
                break;

        }
       return $valid;
    }
}