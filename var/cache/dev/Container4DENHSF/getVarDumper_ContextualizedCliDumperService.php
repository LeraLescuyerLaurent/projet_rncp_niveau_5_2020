<?php

namespace Container4DENHSF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVarDumper_ContextualizedCliDumperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'var_dumper.contextualized_cli_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\ContextualizedDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/ContextualizedDumper.php';

        return $container->privates['var_dumper.contextualized_cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\ContextualizedDumper(($container->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $container->load('getVarDumper_ContextualizedCliDumper_InnerService')), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()))]);
    }
}
