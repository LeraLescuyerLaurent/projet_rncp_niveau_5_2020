<?php

namespace Container4DENHSF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VeGgI6DService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VeGgI6D' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VeGgI6D'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'subCategoriesRepository' => ['privates', 'App\\Repository\\SubCategoriesRepository', 'getSubCategoriesRepositoryService', true],
        ], [
            'subCategoriesRepository' => 'App\\Repository\\SubCategoriesRepository',
        ]);
    }
}
