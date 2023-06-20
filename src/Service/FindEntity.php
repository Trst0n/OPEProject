<?php

namespace App\Service;

use App\Entity\City;
use App\Entity\Civility;
use App\Entity\Curriculum;
use App\Entity\Degree;
use App\Entity\Establishment;
use App\Entity\Field;
use App\Entity\Language;
use App\Entity\Wish;
use Doctrine\ORM\EntityManagerInterface;

class FindEntity
{

    public function __construct(private EntityManagerInterface $entityManager)
    {
    }

    public function getCity(string $cityName): City
    {
        $cityRepository = $this->entityManager->getRepository(City::class);
        $city = $cityRepository->findOneBy(['name' => $cityName]);

        return $city;
    }
    public function getFields(array $fieldsString):array
    {
        $fields = [];
        $FieldRepository = $this->entityManager->getRepository(Field::class);
        foreach($fieldsString as $field){
            $fields[]=$FieldRepository->findOneBy(['name' => $field]);
        }
        return $fields;
    }
    public function getLanguages(array $languagesString):array
    {
        $languages = [];
        foreach($languagesString as $language){
            $languages[]=Language::from(strtoupper($language));
        }
        return $languages;
    }
    public function getCiviity(string $civilityName):Civility
    {
        return Civility::from(strtoupper($civilityName));
    }
    public function getCurriculum(string $curriculumName):Curriculum
    {
        $curriculumRepository = $this->entityManager->getRepository(Curriculum::class);
        $curriculum = $curriculumRepository->findOneBy(['title' => $curriculumName]);

        return $curriculum;
    }
    public function getEstablishment(string $establishmentName):Establishment
    {
        $establishmentRepository = $this->entityManager->getRepository(Establishment::class);
        $establishment = $establishmentRepository->findOneBy(['name' => $establishmentName]);

        return $establishment;
    }
    public function getWishes(array $wishesString):array
    {
        $wishes = [];
        foreach($wishesString as $wish){
            $wishes[]=Wish::from(strtoupper($wish));
        }
        return $wishes;
    }


}