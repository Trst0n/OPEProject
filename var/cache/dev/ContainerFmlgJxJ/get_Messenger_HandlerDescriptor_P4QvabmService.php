<?php

<<<<<<<< HEAD:var/cache/dev/ContainerFmlgJxJ/get_Messenger_HandlerDescriptor_P4QvabmService.php
namespace ContainerFmlgJxJ;
========
namespace ContainerPgpkAu2;

>>>>>>>> 6a6f802302f86a9a99b8b4be4a8dd434c3d3744f:var/cache/dev/ContainerPgpkAu2/get_Messenger_HandlerDescriptor_P4QvabmService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_P4QvabmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.p4Qvabm' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'RedispatchMessageHandler.php';

        $a = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->privates['.messenger.handler_descriptor.p4Qvabm'])) {
            return $container->privates['.messenger.handler_descriptor.p4Qvabm'];
        }

        return $container->privates['.messenger.handler_descriptor.p4Qvabm'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\Messenger\Handler\RedispatchMessageHandler($a), []);
    }
}
