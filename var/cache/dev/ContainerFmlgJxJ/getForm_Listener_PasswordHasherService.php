<?php

<<<<<<<< HEAD:var/cache/dev/ContainerFmlgJxJ/getForm_Listener_PasswordHasherService.php
namespace ContainerFmlgJxJ;
========
namespace ContainerF0uzbxP;

>>>>>>>> 6a6f802302f86a9a99b8b4be4a8dd434c3d3744f:var/cache/dev/ContainerF0uzbxP/getForm_Listener_PasswordHasherService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_Listener_PasswordHasherService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.listener.password_hasher' shared service.
     *
     * @return \Symfony\Component\Form\Extension\PasswordHasher\EventListener\PasswordHasherListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'PasswordHasher'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'PasswordHasherListener.php';

        return $container->privates['form.listener.password_hasher'] = new \Symfony\Component\Form\Extension\PasswordHasher\EventListener\PasswordHasherListener(($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')), ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)));
    }
}
