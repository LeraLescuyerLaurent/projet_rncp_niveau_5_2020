<?php

namespace Container3YKSK8c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZuxFTtnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zuxFTtn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zuxFTtn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.zuxFTtn.App\\Entity\\SubCategories', NULL, 'Cannot autowire service ".service_locator.zuxFTtn": it references class "App\\Entity\\SubCategories" but no such service exists.'],
        ], [
            'category' => 'App\\Entity\\SubCategories',
        ]);
    }
}
