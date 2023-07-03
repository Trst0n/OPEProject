<?php

namespace ContainerZ2ucn4l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSponsoringProcessSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Event\SponsoringProcessSubscriber' shared autowired service.
     *
     * @return \App\Event\SponsoringProcessSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Event/SponsoringProcessSubscriber.php';

        $a = ($container->privates['App\\Service\\Mailing'] ?? $container->load('getMailingService'));

        if (isset($container->privates['App\\Event\\SponsoringProcessSubscriber'])) {
            return $container->privates['App\\Event\\SponsoringProcessSubscriber'];
        }

        return $container->privates['App\\Event\\SponsoringProcessSubscriber'] = new \App\Event\SponsoringProcessSubscriber($a, ($container->services['monolog.logger.history'] ?? $container->load('getMonolog_Logger_HistoryService')));
    }
}