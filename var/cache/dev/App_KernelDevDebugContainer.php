<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHnQs5XM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHnQs5XM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHnQs5XM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHnQs5XM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHnQs5XM\App_KernelDevDebugContainer([
    'container.build_hash' => 'HnQs5XM',
    'container.build_id' => 'e5edfae3',
    'container.build_time' => 1687781862,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHnQs5XM');
