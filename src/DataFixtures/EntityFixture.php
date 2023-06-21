<?php

namespace App\DataFixtures;

use App\Entity\City;
use App\Entity\Civility;
use App\Entity\Curriculum;
use App\Entity\Establishment;
use App\Entity\Field;
use App\Entity\Language;
use App\Entity\Person;
use App\Entity\Proposal;
use App\Entity\Request;
use App\Entity\Sponsor;
use App\Entity\Student;
use App\Entity\Wish;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;


class EntityFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        $city = new City();
        $city->setZipcode((int) $faker->postcode)->setName($faker->city);
        $manager->persist($city);

        $city2 = new City();
        $city2->setZipcode(45000)->setName("Orleans");
        $manager->persist($city2);

        $cursus2 = new Curriculum();
        $cursus2->setTitle("L3MIAGE");
        $manager->persist($cursus2);

        $establishment2 = new Establishment();
        $establishment2->setName("UniversiteOrleans")->addCurriculum($cursus2);
        $manager->persist($establishment2);

        $field2 = new Field();
        $field2->setName("informatique")->addCurriculum($cursus2);
        $manager->persist($field2);

        $cursus = new Curriculum();
        $cursus->setTitle($faker->domainName);
        $manager->persist($cursus);

        $establishment = new Establishment();
        $establishment->setName($faker->name)->addCurriculum($cursus);
        $manager->persist($establishment);

        $field = new Field();
        $field->setName($faker->domainName)->addCurriculum($cursus);
        $manager->persist($field);

//        for ($i=0; $i < 5; $i++) {
//            $person2 = new Sponsor();
//            $person2->setCivility(Civility::Women)
//                ->setFirstname($faker->firstName())
//                ->setLastname($faker->lastName())
//                ->setPhonenumber($faker->phoneNumber())
//                ->setEmail($faker->email())
//                ->setCreatedAt(new \DateTimeImmutable())
//                ->setUpdatedAt(new \DateTimeImmutable())
//                ->setBirthdate($faker->dateTime);
//
//            $sponsor = new Proposal();
//            $sponsor
//                ->setCity($city)
//                ->setWishes([Wish::Housing, Wish::Administrative ])
//                ->setWorkfield([$field])
//                ->setLanguages([Language::Chinese, Language::French]);
//
//            $manager->persist($sponsor);
//
//            $person2->addLead($sponsor);
//            $manager->persist($person2);
//
//        }

        for ($i=0; $i < 5; $i++) {
            $person = new Student();
            $person->setCivility(Civility::Women)
                ->setFirstname($faker->firstName())
                ->setLastname($faker->lastName())
                ->setPhonenumber($faker->phoneNumber())
                ->setEmail($faker->email())
                ->setCreatedAt(new \DateTimeImmutable())
                ->setUpdatedAt(new \DateTimeImmutable())
                ->setBirthdate($faker->dateTime);

            $student = new Request();
            $student
                ->setCity($city)
                ->setWishes([Wish::Housing, Wish::Administrative ])
                ->setCurriculum($cursus)
                ->setLanguages([Language::Chinese, Language::French]);
            $manager->persist($student);

            $person->addLead($student);
            $manager->persist($person);
        }


        $manager->flush();
    }
}
