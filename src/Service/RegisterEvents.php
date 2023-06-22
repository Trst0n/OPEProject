<?php

namespace App\Service;

use App\Entity\Lead;
use App\Entity\Person;
use App\Entity\Proposal;
use App\Entity\Request;
use App\Entity\Student;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\ORM\Event\PreFlushEventArgs;
use Doctrine\ORM\Event\PrePersistEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\ORM\Events;
use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
use Doctrine\ORM\Event\PostPersistEventArgs;
use Doctrine\ORM\Event\PostRemoveEventArgs;
use Doctrine\ORM\Event\PostUpdateEventArgs;

class RegisterEvents implements EventSubscriberInterface
{
    public function getSubscribedEvents(): array
    {
        return [
            Events::prePersist
        ];
    }

    public function prePersist(PrePersistEventArgs $args):void
    {
        $entity = $args->getObject();

        if($entity instanceof Lead){
            $person = $entity->getPerson();

            foreach ($person->getLeads() as $lead){
                if($lead != $entity){
                    $lead->setState("outdated");
                }
            }
        }
    }




}