<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFCZQFHI\App_KernelProdDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFCZQFHI/App_KernelProdDebugContainer.php') {
    touch(__DIR__.'/ContainerFCZQFHI.legacy');

    return;
}

if (!\class_exists(App_KernelProdDebugContainer::class, false)) {
    \class_alias(\ContainerFCZQFHI\App_KernelProdDebugContainer::class, App_KernelProdDebugContainer::class, false);
}

return new \ContainerFCZQFHI\App_KernelProdDebugContainer([
    'container.build_hash' => 'FCZQFHI',
    'container.build_id' => '40c13975',
    'container.build_time' => 1593878321,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFCZQFHI');
