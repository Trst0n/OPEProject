<?php

namespace App\Controller;

use App\Entity\Student;
use App\Enum\Civility;
use App\Enum\Language;
use App\Enum\Wish;
use App\Repository\SponsorRepository;
use App\Repository\StudentRepository;
use App\Service\Algorithm;
use App\Service\FindEntity;
use App\Service\Mailing;
use App\Service\RegistrationService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/api')]
class ApiController extends AbstractController
{

    public function __construct(private Algorithm $algorithm,private RegistrationService $registrationService, private Mailing $mailing, private LoggerInterface $historyLogger)
    {
    }

    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/algoTest', name: 'app_algotest', methods: ['GET'])]
    public function algotest(StudentRepository $studentRepository, SponsorRepository $sponsorRepository, FindEntity $findEntity, EntityManagerInterface $manager): Response
    {
        $person = new Student();
        $person->setFirstname("itri")
            ->setLastname("obanni")
            ->setPhonenumber(0606060606)
            ->setEmail("ad@211231212231212adfadf2gmail.com")
            ->setBirthdate(new \DateTime());

        $student = new \App\Entity\Request();
        $student->setCivility( Civility::Men)
            ->setCity($findEntity->getCity("Orleans"))
            ->setWishes([Wish::Administrative])
            ->setCurriculum($findEntity->getCurriculum("L3MIAGE"))
            ->setLanguages([Language::Chinese, Language::French]);
        $manager->persist($student);
        $person->addLead($student);
        $manager->persist($person);
        $manager->flush();

        $scores = $this->algorithm->Algo($person, $sponsorRepository, 50);


        return new JsonResponse(
            $scores, Response::HTTP_CREATED
        );



    }

    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/sponsor', name: 'app_api_sponsor', methods: ['POST'])]
    public function createSponsor(Request $request): Response
    {
        /** Récuperation des données JSON **/
        $data = json_decode(
            $request->getContent(),
            true
        );


        /** Vérification et création d'une entité Parrain avec les données récupérées*/

        $valid = $this->registrationService->register($data, "sponsor");

        //exit(\Doctrine\Common\Util\Debug::dump($valid));


        /** Vérification des données reçues */

        if (!$valid ) {
            return new JsonResponse(
                ['status' => 'error'],
                Response::HTTP_BAD_REQUEST
            );
        }

        $this->mailing->sendEmail($data['email'],"Validation d'incritpion", 'mail/sponsor-registration.html.twig', ['lastname' => $data['lastname'], 'civility' => (strtolower($data['civility']) === "men" ? "Mr." : "Mme.")]);
        $this->mailing->sendEmail('noreply.ope@gmail.com',"Incription d'un nouvel utilisateur", 'mail/registration.html.twig');

        $this->historyLogger->info((new \DateTime())->format('Y-m-d H:i:s') . " : Un nouveau parrain/marraine vient de s'inscrire ( " . $data['firstname'] . " " . $data['lastname'] . " ).");

        return new JsonResponse(
            ['status' => 'ok',], Response::HTTP_CREATED
        );

    }

    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/student', name: 'app_api_student', methods: ['POST'])]
    public function createStudent(Request $request): JsonResponse
    {
        /** Récuperation des données JSON **/
        $data = json_decode(
            $request->getContent(),
            true
        );

        //exit(\Doctrine\Common\Util\Debug::dump($data));

        /** Vérification et création d'une entité Parrain avec les données récupérées**/

        $valid = $this->registrationService->register($data, "student");

        /** Vérification des données reçues */

        if (! $valid) {
            return new JsonResponse(
                ['status' => 'error'],
                Response::HTTP_BAD_REQUEST
            );
        }

        $this->mailing->sendEmail($data['email'],"Validation d'incritpion", 'mail/student-registration.html.twig', ['firstname' => $data['firstname']]);
        $this->mailing->sendEmail('noreply.ope@gmail.com',"Incription d'un nouvel utilisateur", 'mail/registration.html.twig');

        $this->historyLogger->info((new \DateTime())->format('Y-m-d H:i:s') . " : Un nouveau étudiant/étudiante vient de s'inscrire ( " . $data['firstname'] . " " . $data['lastname'] . " ).");

        return new JsonResponse(
            ['status' => 'ok',], JsonResponse::HTTP_CREATED
        );

    }

}
