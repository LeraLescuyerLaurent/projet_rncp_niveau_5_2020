<?php

namespace ContainerShpvg7F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubCategoryTypeService extends App_KernelProdDebugContainer
{
    /**
     * Gets the private 'App\Form\SubCategoryType' shared autowired service.
     *
     * @return \App\Form\SubCategoryType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/SubCategoryType.php';

        return $container->privates['App\\Form\\SubCategoryType'] = new \App\Form\SubCategoryType();
    }
}
