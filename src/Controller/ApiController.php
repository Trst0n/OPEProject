<?php

namespace App\Controller;

use App\Service\Mailing;
use App\Service\RegistrationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/api')]
class ApiController extends AbstractController
{

    public function __construct(private RegistrationService $registrationService, private Mailing $mailing)
    {
    }

    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/sponsor', name: 'app_api_sponsor', methods: ['POST'])]
    public function apiSponsor(Request $request): Response
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

        $this->mailing->sendEmail($data['email'],"Validation d'incritpion", 'mail/registration.html.twig');

        return new JsonResponse(
            ['status' => 'ok',], Response::HTTP_CREATED
        );

    }

    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/student', name: 'app_api_student', methods: ['POST'])]
    public function apiEtu(Request $request): JsonResponse
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

        $this->mailing->sendEmail($data['email'],"Validation d'incritpion", 'mail/registration.html.twig');


        return new JsonResponse(
            ['status' => 'ok',], JsonResponse::HTTP_CREATED
        );

    }

}
