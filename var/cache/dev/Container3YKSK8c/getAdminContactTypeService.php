<?php

namespace Container3YKSK8c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminContactTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AdminContactType' shared autowired service.
     *
     * @return \App\Form\AdminContactType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AdminContactType.php';

        return $container->privates['App\\Form\\AdminContactType'] = new \App\Form\AdminContactType();
    }
}
