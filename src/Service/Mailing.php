<?php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class Mailing
{

    public function __construct(private MailerInterface $mailer)
    {
    }

    /**
     * @throws TransportExceptionInterface
     */
    public function sendEmail(string $to, string $subject, string $twig): void
    {
        $email = (new TemplatedEmail())
            ->from('noreply.ope@gmail.com')
            ->to($to)
            ->subject($subject)
            ->htmlTemplate($twig);

        $this->mailer->send($email);


    }
}