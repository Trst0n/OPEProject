<?php

namespace ContainerFmlgJxJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_64IMLzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.64IM_Lz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.64IM_Lz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'proposalRepository' => ['privates', 'App\\Repository\\ProposalRepository', 'getProposalRepositoryService', true],
            'student' => ['privates', '.errored..service_locator.64IM_Lz.App\\Entity\\Request', NULL, 'Cannot autowire service ".service_locator.64IM_Lz": it needs an instance of "App\\Entity\\Request" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'proposalRepository' => 'App\\Repository\\ProposalRepository',
            'student' => 'App\\Entity\\Request',
        ]);
    }
}
