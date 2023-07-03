<?php

namespace Container3AsI9xg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__GjCOJyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..gjCOJy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..gjCOJy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'administratorRepository' => ['privates', 'App\\Repository\\AdministratorRepository', 'getAdministratorRepositoryService', true],
            'mailing' => ['privates', 'App\\Service\\Mailing', 'getMailingService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'administratorRepository' => 'App\\Repository\\AdministratorRepository',
            'mailing' => 'App\\Service\\Mailing',
            'manager' => '?',
            'passwordHasher' => '?',
        ]);
    }
}
