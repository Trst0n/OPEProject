<?php

namespace ContainerZ2ucn4l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAlgorithmCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\AlgorithmCommand' shared autowired service.
     *
     * @return \App\Command\AlgorithmCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/AlgorithmCommand.php';

        $container->privates['App\\Command\\AlgorithmCommand'] = $instance = new \App\Command\AlgorithmCommand(($container->privates['App\\Repository\\SponsorRepository'] ?? $container->load('getSponsorRepositoryService')), ($container->privates['App\\Repository\\SponsorshipRepository'] ?? $container->load('getSponsorshipRepositoryService')), ($container->privates['App\\Repository\\RequestRepository'] ?? $container->load('getRequestRepositoryService')), ($container->privates['App\\Service\\Algorithm'] ?? $container->load('getAlgorithmService')));

        $instance->setName('app:algorithm');

        return $instance;
    }
}
