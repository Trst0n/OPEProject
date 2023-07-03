<?php

namespace App\DataFixtures;

use App\Entity\Administrator;
use App\Entity\City;
use App\Entity\Curriculum;
use App\Entity\Establishment;
use App\Entity\Field;
use App\Entity\Proposal;
use App\Entity\Request;
use App\Entity\Sponsor;
use App\Entity\Sponsorship;
use App\Entity\SponsorshipState;
use App\Entity\Student;
use App\Enum\Civility;
use App\Enum\Language;
use App\Enum\LeadState;
use App\Enum\Wish;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class EntityFixture extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        $city = new City();
        $city->setZipcode((int) $faker->postcode())->setName($faker->city())->setLat($faker->randomNumber())->setLng($faker->randomNumber());
        $manager->persist($city);

        $city2 = new City();
        $city2->setZipcode(45000)->setName("Orleans")->setLat($faker->randomNumber())->setLng($faker->randomNumber());
        $manager->persist($city2);

        $city2 = new City();
        $city2->setZipcode(45800)->setName("Saint-Jean de Braye")->setLat($faker->randomNumber())->setLng($faker->randomNumber());
        $manager->persist($city2);


        $establishment2 = new Establishment();
        $establishment2->setName("UniversiteOrleans");
        $manager->persist($establishment2);


        $cursus2 = new Curriculum();
        $cursus2->setTitle("L3MIAGE")->setEstablishment($establishment2);
        $manager->persist($cursus2);


        $field2 = new Field();
        $field2->setName("informatique")->addCurriculum($cursus2);
        $manager->persist($field2);

        $establishment = new Establishment();
        $establishment->setName($faker->name());
        $manager->persist($establishment);

        $cursus = new Curriculum();
        $cursus->setTitle($faker->domainName())->setEstablishment($establishment);
        $manager->persist($cursus);

        $field = new Field();
        $field->setName("test")->addCurriculum($cursus);
        $manager->persist($field);


        for ($i=0; $i < 20; $i++) {
            $person = new Student();
            $person->setFirstname($faker->firstName())
                ->setLastname($faker->lastName())
                ->setPhonenumber($faker->phoneNumber())
                ->setEmail($faker->email())
                ->setBirthdate($faker->dateTime());

            $student = new Request();
            $student->setCivility($faker->randomNumber()%2 === 0 ?  Civility::Women : Civility::Men)
                ->setCity($city)
                ->setWishes([Wish::Housing, Wish::Administrative])
                ->setCurriculum($cursus)
                ->setLanguages([Language::Chinese, Language::French]);
            $manager->persist($student);

            $person->addLead($student);
            $manager->persist($person);

            $person2 = new Sponsor();
            $person2->setFirstname($faker->firstName())
                ->setLastname($faker->lastName())
                ->setPhonenumber($faker->phoneNumber())
                ->setEmail($faker->email())
                ->setBirthdate($faker->dateTime());

            $sponsor = new Proposal();
            $sponsor
                ->setCivility($faker->randomNumber()%2 === 0 ?  Civility::Women : Civility::Men)
                ->setCity($city)
                ->setWishes([Wish::Housing, Wish::Administrative])
                ->addWorkfield($field)
                ->setLanguages([Language::Chinese, Language::French]);

            $manager->persist($sponsor);

            $person2->addLead($sponsor);
            $manager->persist($person2);

        }

        $admin = new Administrator();
        $admin->setUsername("admin")
            ->setPassword($this->passwordHasher->hashPassword($admin, "admin"))->setRoles(["ROLE_SUPER_ADMIN"]);

        $manager->persist($admin);

//        for ($i=0; $i < 10; $i++) {
//            $person2 = new Sponsor();
//            $person2
//                ->setFirstname($faker->firstName())
//                ->setLastname($faker->lastName())
//                ->setPhonenumber($faker->phoneNumber())
//                ->setEmail($faker->email())
//                ->setBirthdate($faker->dateTime());
//
//            $sponsor = new Proposal();
//            $sponsor
//                ->setCivility($faker->randomNumber()%2 === 0 ?  Civility::Women : Civility::Men)
//                ->setCity($city)
//                ->setWishes([Wish::Housing, Wish::Administrative ])
//                ->addWorkfield($field)
//                ->setLanguages([Language::Chinese, Language::French]);
//
//            $manager->persist($sponsor);
//
//            $person2->addLead($sponsor);
//            $manager->persist($person2);
//        }
//
//        for ($i=0; $i < 10; $i++) {
//            $person = new Student();
//            $person
//                ->setFirstname($faker->firstName())
//                ->setLastname($faker->lastName())
//                ->setPhonenumber($faker->phoneNumber())
//                ->setEmail($faker->email())
//                ->setBirthdate($faker->dateTime());
//
//            $student = new Request();
//            $student
//                ->setCivility($faker->randomNumber()%2 === 0 ?  Civility::Women : Civility::Men)
//                ->setCity($city)
//                ->setWishes([Wish::Housing, Wish::Administrative ])
//                ->setCurriculum($cursus)
//                ->setLanguages([Language::Chinese, Language::French]);
//            $manager->persist($student);
//
//            $person->addLead($student);
//            $manager->persist($person);
//        }


        $manager->flush();
    }
}
