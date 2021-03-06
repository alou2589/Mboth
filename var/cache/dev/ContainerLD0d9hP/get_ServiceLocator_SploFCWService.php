<?php

namespace ContainerLD0d9hP;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SploFCWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sploFCW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sploFCW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'niveauEtude' => ['privates', '.errored..service_locator.sploFCW.App\\Entity\\NiveauEtude', NULL, 'Cannot autowire service ".service_locator.sploFCW": it references class "App\\Entity\\NiveauEtude" but no such service exists.'],
            'niveauEtudeRepository' => ['privates', 'App\\Repository\\NiveauEtudeRepository', 'getNiveauEtudeRepositoryService', true],
        ], [
            'niveauEtude' => 'App\\Entity\\NiveauEtude',
            'niveauEtudeRepository' => 'App\\Repository\\NiveauEtudeRepository',
        ]);
    }
}
