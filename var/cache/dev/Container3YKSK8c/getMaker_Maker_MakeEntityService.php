<?php

namespace Container3YKSK8c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_Maker_MakeEntityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.maker.make_entity' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Maker\MakeEntity
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/InputAwareMakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeEntity.php';

        return $container->privates['maker.maker.make_entity'] = new \Symfony\Bundle\MakerBundle\Maker\MakeEntity(($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.doctrine_helper'] ?? $container->load('getMaker_DoctrineHelperService')), \dirname(__DIR__, 4), ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')), ($container->privates['maker.entity_class_generator'] ?? $container->load('getMaker_EntityClassGeneratorService')));
    }
}
