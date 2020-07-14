<?php

namespace Container3YKSK8c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CSmT4oHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CSmT4oH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CSmT4oH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contact' => ['privates', '.errored..service_locator.CSmT4oH.App\\Entity\\Contact', NULL, 'Cannot autowire service ".service_locator.CSmT4oH": it references class "App\\Entity\\Contact" but no such service exists.'],
            'contactRepository' => ['privates', 'App\\Repository\\ContactRepository', 'getContactRepositoryService', true],
        ], [
            'contact' => 'App\\Entity\\Contact',
            'contactRepository' => 'App\\Repository\\ContactRepository',
        ]);
    }
}
