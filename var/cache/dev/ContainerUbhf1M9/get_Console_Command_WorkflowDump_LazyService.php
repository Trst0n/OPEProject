<?php

<<<<<<<< HEAD:var/cache/dev/ContainerUbhf1M9/get_Console_Command_WorkflowDump_LazyService.php
namespace ContainerUbhf1M9;
========
namespace ContainerPgpkAu2;

>>>>>>>> 6a6f802302f86a9a99b8b4be4a8dd434c3d3744f:var/cache/dev/ContainerPgpkAu2/get_Console_Command_WorkflowDump_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_WorkflowDump_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.workflow_dump.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.workflow_dump.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('workflow:dump', [], 'Dump a workflow', false, #[\Closure(name: 'console.command.workflow_dump', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\WorkflowDumpCommand')] fn (): \Symfony\Bundle\FrameworkBundle\Command\WorkflowDumpCommand => ($container->privates['console.command.workflow_dump'] ?? $container->load('getConsole_Command_WorkflowDumpService')));
    }
}
