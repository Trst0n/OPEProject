<?php

namespace ContainerGcvv1JE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hd7Od4sService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hd7Od4s' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hd7Od4s'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\DashboardController::index' => ['privates', '.service_locator.JhIFVTi', 'get_ServiceLocator_JhIFVTiService', true],
            'App\\Controller\\SponsorController::index' => ['privates', '.service_locator.MPUuYf0', 'get_ServiceLocator_MPUuYf0Service', true],
            'App\\Controller\\SponsorController::show' => ['privates', '.service_locator.IMMhoNM', 'get_ServiceLocator_IMMhoNMService', true],
            'App\\Controller\\SponsorshipController::delete' => ['privates', '.service_locator.aCYCZkE', 'get_ServiceLocator_ACYCZkEService', true],
            'App\\Controller\\SponsorshipController::edit' => ['privates', '.service_locator.aCYCZkE', 'get_ServiceLocator_ACYCZkEService', true],
            'App\\Controller\\SponsorshipController::index' => ['privates', '.service_locator.gvThNC9', 'get_ServiceLocator_GvThNC9Service', true],
            'App\\Controller\\SponsorshipController::new' => ['privates', '.service_locator.gvThNC9', 'get_ServiceLocator_GvThNC9Service', true],
            'App\\Controller\\SponsorshipController::show' => ['privates', '.service_locator.A1WuIv.', 'get_ServiceLocator_A1WuIv_Service', true],
            'App\\Controller\\StudentController::index' => ['privates', '.service_locator.wmzwuy.', 'get_ServiceLocator_Wmzwuy_Service', true],
            'App\\Controller\\StudentController::show' => ['privates', '.service_locator.aMfIQn5', 'get_ServiceLocator_AMfIQn5Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\DashboardController:index' => ['privates', '.service_locator.JhIFVTi', 'get_ServiceLocator_JhIFVTiService', true],
            'App\\Controller\\SponsorController:index' => ['privates', '.service_locator.MPUuYf0', 'get_ServiceLocator_MPUuYf0Service', true],
            'App\\Controller\\SponsorController:show' => ['privates', '.service_locator.IMMhoNM', 'get_ServiceLocator_IMMhoNMService', true],
            'App\\Controller\\SponsorshipController:delete' => ['privates', '.service_locator.aCYCZkE', 'get_ServiceLocator_ACYCZkEService', true],
            'App\\Controller\\SponsorshipController:edit' => ['privates', '.service_locator.aCYCZkE', 'get_ServiceLocator_ACYCZkEService', true],
            'App\\Controller\\SponsorshipController:index' => ['privates', '.service_locator.gvThNC9', 'get_ServiceLocator_GvThNC9Service', true],
            'App\\Controller\\SponsorshipController:new' => ['privates', '.service_locator.gvThNC9', 'get_ServiceLocator_GvThNC9Service', true],
            'App\\Controller\\SponsorshipController:show' => ['privates', '.service_locator.A1WuIv.', 'get_ServiceLocator_A1WuIv_Service', true],
            'App\\Controller\\StudentController:index' => ['privates', '.service_locator.wmzwuy.', 'get_ServiceLocator_Wmzwuy_Service', true],
            'App\\Controller\\StudentController:show' => ['privates', '.service_locator.aMfIQn5', 'get_ServiceLocator_AMfIQn5Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\DashboardController::index' => '?',
            'App\\Controller\\SponsorController::index' => '?',
            'App\\Controller\\SponsorController::show' => '?',
            'App\\Controller\\SponsorshipController::delete' => '?',
            'App\\Controller\\SponsorshipController::edit' => '?',
            'App\\Controller\\SponsorshipController::index' => '?',
            'App\\Controller\\SponsorshipController::new' => '?',
            'App\\Controller\\SponsorshipController::show' => '?',
            'App\\Controller\\StudentController::index' => '?',
            'App\\Controller\\StudentController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\DashboardController:index' => '?',
            'App\\Controller\\SponsorController:index' => '?',
            'App\\Controller\\SponsorController:show' => '?',
            'App\\Controller\\SponsorshipController:delete' => '?',
            'App\\Controller\\SponsorshipController:edit' => '?',
            'App\\Controller\\SponsorshipController:index' => '?',
            'App\\Controller\\SponsorshipController:new' => '?',
            'App\\Controller\\SponsorshipController:show' => '?',
            'App\\Controller\\StudentController:index' => '?',
            'App\\Controller\\StudentController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
