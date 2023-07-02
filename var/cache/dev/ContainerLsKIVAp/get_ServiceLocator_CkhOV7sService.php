<?php

namespace ContainerLsKIVAp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CkhOV7sService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CkhOV7s' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CkhOV7s'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'lead' => ['privates', '.errored..service_locator.CkhOV7s.App\\Entity\\Lead', NULL, 'Cannot autowire service ".service_locator.CkhOV7s": it needs an instance of "App\\Entity\\Lead" but this type has been excluded in "config/services.yaml".'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'sponsoringProcessStateMachine' => ['privates', 'state_machine.sponsoring_process', 'getStateMachine_SponsoringProcessService', false],
            'sponsorship' => ['privates', '.errored..service_locator.CkhOV7s.App\\Entity\\Sponsorship', NULL, 'Cannot autowire service ".service_locator.CkhOV7s": it needs an instance of "App\\Entity\\Sponsorship" but this type has been excluded in "config/services.yaml".'],
        ], [
            'lead' => 'App\\Entity\\Lead',
            'manager' => '?',
            'sponsoringProcessStateMachine' => '?',
            'sponsorship' => 'App\\Entity\\Sponsorship',
        ]);
    }
}
