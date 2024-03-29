<?php

namespace Container3YKSK8c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_Maker_MakeUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.maker.make_user' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Maker\MakeUser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeUser.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/UserClassBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php';

        return $container->privates['maker.maker.make_user'] = new \Symfony\Bundle\MakerBundle\Maker\MakeUser(($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.user_class_builder'] ?? ($container->privates['maker.user_class_builder'] = new \Symfony\Bundle\MakerBundle\Security\UserClassBuilder())), ($container->privates['maker.security_config_updater'] ?? ($container->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), ($container->privates['maker.doctrine_helper'] ?? $container->load('getMaker_DoctrineHelperService')), ($container->privates['maker.entity_class_generator'] ?? $container->load('getMaker_EntityClassGeneratorService')));
    }
}
