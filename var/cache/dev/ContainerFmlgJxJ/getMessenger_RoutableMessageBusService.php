<?php

<<<<<<<< HEAD:var/cache/dev/ContainerFmlgJxJ/getMessenger_RoutableMessageBusService.php
namespace ContainerFmlgJxJ;
========
namespace ContainerF0uzbxP;

>>>>>>>> 6a6f802302f86a9a99b8b4be4a8dd434c3d3744f:var/cache/dev/ContainerF0uzbxP/getMessenger_RoutableMessageBusService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_RoutableMessageBusService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.routable_message_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\RoutableMessageBus
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'RoutableMessageBus.php';

        $a = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->privates['messenger.routable_message_bus'])) {
            return $container->privates['messenger.routable_message_bus'];
        }

        return $container->privates['messenger.routable_message_bus'] = new \Symfony\Component\Messenger\RoutableMessageBus(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'messenger.bus.default' => ['services', 'messenger.default_bus', 'getMessenger_DefaultBusService', false],
        ], [
            'messenger.bus.default' => '?',
        ]), $a);
    }
}
