<?php

namespace ContainerGs0KwKy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSponsorshipStatusUpdateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Event\SponsorshipStatusUpdate' shared autowired service.
     *
     * @return \App\Event\SponsorshipStatusUpdate
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Event/SponsorshipStatusUpdate.php';

        return $container->privates['App\\Event\\SponsorshipStatusUpdate'] = new \App\Event\SponsorshipStatusUpdate();
    }
}
