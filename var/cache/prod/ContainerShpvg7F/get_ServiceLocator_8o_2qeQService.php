<?php

namespace ContainerShpvg7F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8o_2qeQService extends App_KernelProdDebugContainer
{
    /**
     * Gets the private '.service_locator.8o.2qeQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8o.2qeQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.8o.2qeQ.App\\Entity\\Categories', NULL, 'Cannot autowire service ".service_locator.8o.2qeQ": it references class "App\\Entity\\Categories" but no such service exists.'],
        ], [
            'category' => 'App\\Entity\\Categories',
        ]);
    }
}
