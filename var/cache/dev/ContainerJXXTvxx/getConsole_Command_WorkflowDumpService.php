<?php

namespace ContainerJXXTvxx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_WorkflowDumpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.workflow_dump' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\WorkflowDumpCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/WorkflowDumpCommand.php';

        $container->privates['console.command.workflow_dump'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\WorkflowDumpCommand(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'sponsoring_process' => ['privates', 'state_machine.sponsoring_process', 'getStateMachine_SponsoringProcessService', false],
        ], [
            'sponsoring_process' => 'Symfony\\Component\\Workflow\\StateMachine',
        ]));

        $instance->setName('workflow:dump');
        $instance->setDescription('Dump a workflow');

        return $instance;
    }
}
