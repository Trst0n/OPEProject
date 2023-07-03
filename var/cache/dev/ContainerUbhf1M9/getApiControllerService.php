<?php

namespace ContainerUbhf1M9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ApiController' shared autowired service.
     *
     * @return \App\Controller\ApiController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ApiController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/RegistrationService.php';
        include_once \dirname(__DIR__, 4).'/src/Service/FindEntity.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        $container->services['App\\Controller\\ApiController'] = $instance = new \App\Controller\ApiController(new \App\Service\RegistrationService($a, new \App\Service\FindEntity($a), ($container->privates['debug.validator'] ?? self::getDebug_ValidatorService($container))), ($container->privates['App\\Service\\Mailing'] ?? $container->load('getMailingService')), ($container->services['monolog.logger.history'] ?? $container->load('getMonolog_Logger_HistoryService')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\ApiController', $container));

        return $instance;
    }
}
