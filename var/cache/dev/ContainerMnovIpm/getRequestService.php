<?php

namespace ContainerMnovIpm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRequestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.64IM_Lz.App\Entity\Request' shared service.
     *
     * @return \App\Entity\Request
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.64IM_Lz": it needs an instance of "App\\Entity\\Request" but this type has been excluded in "config/services.yaml".');
    }
}
