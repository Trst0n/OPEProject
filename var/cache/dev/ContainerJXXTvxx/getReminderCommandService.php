<?php

namespace ContainerJXXTvxx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReminderCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\ReminderCommand' shared autowired service.
     *
     * @return \App\Command\ReminderCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/ReminderCommand.php';

        $container->privates['App\\Command\\ReminderCommand'] = $instance = new \App\Command\ReminderCommand(($container->privates['App\\Repository\\SponsorshipRepository'] ?? $container->load('getSponsorshipRepositoryService')), ($container->privates['App\\Service\\Mailing'] ?? $container->load('getMailingService')));

        $instance->setName('app:send-reminder');

        return $instance;
    }
}
