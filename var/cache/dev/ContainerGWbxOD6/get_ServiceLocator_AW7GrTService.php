<?php

namespace ContainerGWbxOD6;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AW7GrTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._AW7GrT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._AW7GrT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cellule' => ['privates', '.errored..service_locator._AW7GrT.App\\Entity\\Cellule', NULL, 'Cannot autowire service ".service_locator._AW7GrT": it references class "App\\Entity\\Cellule" but no such service exists.'],
        ], [
            'cellule' => 'App\\Entity\\Cellule',
        ]);
    }
}