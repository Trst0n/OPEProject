<?php

namespace ContainerFmlgJxJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A7uOTdJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.A7uOTdJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.A7uOTdJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'person' => ['privates', '.errored..service_locator.A7uOTdJ.App\\Entity\\Person', NULL, 'Cannot autowire service ".service_locator.A7uOTdJ": it needs an instance of "App\\Entity\\Person" but this type has been excluded in "config/services.yaml".'],
        ], [
            'person' => 'App\\Entity\\Person',
        ]);
    }
}
