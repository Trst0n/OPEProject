<?php

<<<<<<<< HEAD:var/cache/dev/ContainerUbhf1M9/getForm_ServerParamsService.php
namespace ContainerUbhf1M9;
========
namespace ContainerF0uzbxP;

>>>>>>>> 6a6f802302f86a9a99b8b4be4a8dd434c3d3744f:var/cache/dev/ContainerF0uzbxP/getForm_ServerParamsService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_ServerParamsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'ServerParams.php';

        return $container->privates['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
