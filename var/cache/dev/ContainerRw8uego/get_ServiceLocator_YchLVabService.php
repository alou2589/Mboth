<?php

namespace ContainerRw8uego;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YchLVabService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YchLVab' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YchLVab'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'niveauEtude' => ['privates', '.errored..service_locator.YchLVab.App\\Entity\\NiveauEtude', NULL, 'Cannot autowire service ".service_locator.YchLVab": it references class "App\\Entity\\NiveauEtude" but no such service exists.'],
        ], [
            'niveauEtude' => 'App\\Entity\\NiveauEtude',
        ]);
    }
}
