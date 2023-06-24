<?php

namespace ContainerHnQs5XM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NndhpqwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nndhpqw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nndhpqw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'personRepository' => ['privates', 'App\\Repository\\PersonRepository', 'getPersonRepositoryService', true],
        ], [
            'personRepository' => 'App\\Repository\\PersonRepository',
        ]);
    }
}
