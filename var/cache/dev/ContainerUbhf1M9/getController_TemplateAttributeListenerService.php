<?php

<<<<<<<< HEAD:var/cache/dev/ContainerUbhf1M9/getController_TemplateAttributeListenerService.php
namespace ContainerUbhf1M9;
========
namespace ContainerPgpkAu2;

>>>>>>>> 6a6f802302f86a9a99b8b4be4a8dd434c3d3744f:var/cache/dev/ContainerPgpkAu2/getController_TemplateAttributeListenerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getController_TemplateAttributeListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'controller.template_attribute_listener' shared service.
     *
     * @return \Symfony\Bridge\Twig\EventListener\TemplateAttributeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'TemplateAttributeListener.php';

        $a = ($container->privates['twig'] ?? self::getTwigService($container));

        if (isset($container->privates['controller.template_attribute_listener'])) {
            return $container->privates['controller.template_attribute_listener'];
        }

        return $container->privates['controller.template_attribute_listener'] = new \Symfony\Bridge\Twig\EventListener\TemplateAttributeListener($a);
    }
}
