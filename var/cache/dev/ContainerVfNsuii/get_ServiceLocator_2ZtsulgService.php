<?php

namespace ContainerVfNsuii;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2ZtsulgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2Ztsulg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2Ztsulg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'maladieRepository' => ['privates', 'App\\Repository\\MaladieRepository', 'getMaladieRepositoryService', true],
            'type_maladie' => ['privates', '.errored..service_locator.2Ztsulg.App\\Entity\\TypeMaladie', NULL, 'Cannot autowire service ".service_locator.2Ztsulg": it references class "App\\Entity\\TypeMaladie" but no such service exists.'],
        ], [
            'maladieRepository' => 'App\\Repository\\MaladieRepository',
            'type_maladie' => 'App\\Entity\\TypeMaladie',
        ]);
    }
}