<?php

<<<<<<<< HEAD:var/cache/dev/ContainerUbhf1M9/getSecurity_AuthenticationUtilsService.php
namespace ContainerUbhf1M9;
========
namespace ContainerF0uzbxP;

>>>>>>>> 6a6f802302f86a9a99b8b4be4a8dd434c3d3744f:var/cache/dev/ContainerF0uzbxP/getSecurity_AuthenticationUtilsService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AuthenticationUtilsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationUtils.php';

        return $container->privates['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
