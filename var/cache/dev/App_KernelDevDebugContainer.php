<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerM0vNp5H\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerM0vNp5H/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerM0vNp5H.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerM0vNp5H\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerM0vNp5H\App_KernelDevDebugContainer([
    'container.build_hash' => 'M0vNp5H',
    'container.build_id' => 'ec95d63b',
    'container.build_time' => 1649944593,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerM0vNp5H');
