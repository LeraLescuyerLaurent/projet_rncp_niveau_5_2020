<?php

namespace Container4DENHSF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_Maker_MakeMessageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.maker.make_message' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Maker\MakeMessage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeMessage.php';

        return $container->privates['maker.maker.make_message'] = new \Symfony\Bundle\MakerBundle\Maker\MakeMessage(($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')));
    }
}
