<?php

namespace ContainerLq70fgZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTailwind_CssAssetCompilerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'tailwind.css_asset_compiler' shared service.
     *
     * @return \Symfonycasts\TailwindBundle\AssetMapper\TailwindCssAssetCompiler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/Compiler/AssetCompilerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/tailwind-bundle/src/AssetMapper/TailwindCssAssetCompiler.php';

        return $container->privates['tailwind.css_asset_compiler'] = new \Symfonycasts\TailwindBundle\AssetMapper\TailwindCssAssetCompiler(($container->privates['tailwind.builder'] ?? $container->load('getTailwind_BuilderService')));
    }
}
