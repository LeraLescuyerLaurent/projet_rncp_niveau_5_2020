<?php

namespace ContainerFCZQFHI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostsControllerService extends App_KernelProdDebugContainer
{
    /**
     * Gets the public 'App\Controller\PostsController' shared autowired service.
     *
     * @return \App\Controller\PostsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PostsController.php';

        $container->services['App\\Controller\\PostsController'] = $instance = new \App\Controller\PostsController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\PostsController', $container));

        return $instance;
    }
}
