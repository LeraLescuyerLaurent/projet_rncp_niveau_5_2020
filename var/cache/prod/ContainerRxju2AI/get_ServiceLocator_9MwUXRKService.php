<?php

namespace ContainerRxju2AI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9MwUXRKService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.9MwUXRK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9MwUXRK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['privates', 'App\\Repository\\MediaRepository', 'getMediaRepositoryService', true],
        ], [
            'em' => 'App\\Repository\\MediaRepository',
        ]);
    }
}
