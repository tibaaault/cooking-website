<?php

namespace ContainerLq70fgZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_MigrationsFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.migrations_factory' shared service.
     *
     * @return \Doctrine\Migrations\Version\MigrationFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/MigrationFactory.php';

        $a = ($container->privates['doctrine.migrations.dependency_factory'] ?? $container->load('getDoctrine_Migrations_DependencyFactoryService'));

        if (isset($container->privates['doctrine.migrations.migrations_factory'])) {
            return $container->privates['doctrine.migrations.migrations_factory'];
        }

        return $container->privates['doctrine.migrations.migrations_factory'] = $a->getMigrationFactory();
    }
}
