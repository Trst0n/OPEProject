<?php

namespace ContainerXXMJVNH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LXwBZ8_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lXwBZ8.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lXwBZ8.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'sponsoringProcessStateMachine' => ['privates', 'state_machine.sponsoring_process', 'getStateMachine_SponsoringProcessService', false],
            'sponsorship' => ['privates', '.errored..service_locator.lXwBZ8..App\\Entity\\Sponsorship', NULL, 'Cannot autowire service ".service_locator.lXwBZ8.": it needs an instance of "App\\Entity\\Sponsorship" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'sponsoringProcessStateMachine' => '?',
            'sponsorship' => 'App\\Entity\\Sponsorship',
        ]);
    }
}