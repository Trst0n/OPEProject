<?php

namespace ContainerOcJu0lt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSponsorControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SponsorController' shared autowired service.
     *
     * @return \App\Controller\SponsorController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SponsorController.php';

        $container->services['App\\Controller\\SponsorController'] = $instance = new \App\Controller\SponsorController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\SponsorController', $container));

        return $instance;
    }
}
