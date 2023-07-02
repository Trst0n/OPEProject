<?php

namespace ContainerLdqx40F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IMMhoNMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IMMhoNM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IMMhoNM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'sponsor' => ['privates', '.errored..service_locator.IMMhoNM.App\\Entity\\Sponsor', NULL, 'Cannot autowire service ".service_locator.IMMhoNM": it needs an instance of "App\\Entity\\Sponsor" but this type has been excluded in "config/services.yaml".'],
        ], [
            'sponsor' => 'App\\Entity\\Sponsor',
        ]);
    }
}
