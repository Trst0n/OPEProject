<?php

namespace ContainerJBmg2x0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\Mailing' shared autowired service.
     *
     * @return \App\Service\Mailing
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/Mailing.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';

        $a = ($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService'));

        if (isset($container->privates['App\\Service\\Mailing'])) {
            return $container->privates['App\\Service\\Mailing'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['App\\Service\\Mailing'])) {
            return $container->privates['App\\Service\\Mailing'];
        }

        return $container->privates['App\\Service\\Mailing'] = new \App\Service\Mailing(new \Symfony\Component\Mailer\Mailer($a, NULL, $b));
    }
}
