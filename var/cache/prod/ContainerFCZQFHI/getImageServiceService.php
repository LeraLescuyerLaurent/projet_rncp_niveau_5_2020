<?php

namespace ContainerFCZQFHI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImageServiceService extends App_KernelProdDebugContainer
{
    /**
     * Gets the private 'App\Service\ImageService' shared autowired service.
     *
     * @return \App\Service\ImageService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/ImageService.php';

        return $container->privates['App\\Service\\ImageService'] = new \App\Service\ImageService();
    }
}
