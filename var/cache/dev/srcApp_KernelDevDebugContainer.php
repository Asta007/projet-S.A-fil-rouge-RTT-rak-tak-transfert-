<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIFKbnks\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIFKbnks/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIFKbnks.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIFKbnks\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerIFKbnks\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'IFKbnks',
    'container.build_id' => '0dd77cf9',
    'container.build_time' => 1566200662,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIFKbnks');
