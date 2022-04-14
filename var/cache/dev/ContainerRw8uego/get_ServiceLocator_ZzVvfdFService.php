<?php

namespace ContainerRw8uego;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZzVvfdFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZzVvfdF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZzVvfdF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ecoleRepository' => ['privates', 'App\\Repository\\EcoleRepository', 'getEcoleRepositoryService', true],
            'niveau_etude' => ['privates', '.errored..service_locator.ZzVvfdF.App\\Entity\\NiveauEtude', NULL, 'Cannot autowire service ".service_locator.ZzVvfdF": it references class "App\\Entity\\NiveauEtude" but no such service exists.'],
        ], [
            'ecoleRepository' => 'App\\Repository\\EcoleRepository',
            'niveau_etude' => 'App\\Entity\\NiveauEtude',
        ]);
    }
}
