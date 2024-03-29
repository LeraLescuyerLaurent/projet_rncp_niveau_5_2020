<?php

namespace Container4DENHSF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_Maker_MakeSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.maker.make_subscriber' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Maker\MakeSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeSubscriber.php';

        return $container->privates['maker.maker.make_subscriber'] = new \Symfony\Bundle\MakerBundle\Maker\MakeSubscriber(($container->privates['maker.event_registry'] ?? $container->load('getMaker_EventRegistryService')));
    }
}
