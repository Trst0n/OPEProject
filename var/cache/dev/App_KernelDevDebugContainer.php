<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerU1CSOq3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerU1CSOq3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerU1CSOq3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerU1CSOq3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerU1CSOq3\App_KernelDevDebugContainer([
    'container.build_hash' => 'U1CSOq3',
    'container.build_id' => 'b9862a02',
    'container.build_time' => 1688119644,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerU1CSOq3');
