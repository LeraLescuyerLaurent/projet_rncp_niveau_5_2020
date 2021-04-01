<?php

namespace ContainerRxju2AI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DSsnscEService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.DSsnscE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DSsnscE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pages' => ['privates', '.errored..service_locator.DSsnscE.App\\Entity\\Pages', NULL, 'Cannot autowire service ".service_locator.DSsnscE": it references class "App\\Entity\\Pages" but no such service exists.'],
        ], [
            'pages' => 'App\\Entity\\Pages',
        ]);
    }
}