<?php

namespace App\Event;

use App\Entity\Sponsorship;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;
use Doctrine\ORM\Event\PostUpdateEventArgs;
use Doctrine\ORM\Events;

#[AsEntityListener(event: Events::postUpdate, method: 'postUpdate', entity: Sponsorship::class)]
class SponsorshipStatusUpdate
{
    public function postUpdate(Sponsorship $sponsorship, PostUpdateEventArgs $args): void
    {
        $sponsorship->setUpdatesAt(new \DateTimeImmutable());
        $args->getObjectManager()->flush();

    }
}