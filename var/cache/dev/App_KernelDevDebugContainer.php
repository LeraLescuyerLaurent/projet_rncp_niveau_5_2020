<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4DENHSF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4DENHSF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4DENHSF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4DENHSF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4DENHSF\App_KernelDevDebugContainer([
    'container.build_hash' => '4DENHSF',
    'container.build_id' => '1264d1d2',
    'container.build_time' => 1593878645,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4DENHSF');
