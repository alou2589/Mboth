<?php

namespace ContainerNxt3Tag;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MYplJyjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MYplJyj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MYplJyj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cellule' => ['privates', '.errored..service_locator.MYplJyj.App\\Entity\\Cellule', NULL, 'Cannot autowire service ".service_locator.MYplJyj": it references class "App\\Entity\\Cellule" but no such service exists.'],
            'celluleRepository' => ['privates', 'App\\Repository\\CelluleRepository', 'getCelluleRepositoryService', true],
        ], [
            'cellule' => 'App\\Entity\\Cellule',
            'celluleRepository' => 'App\\Repository\\CelluleRepository',
        ]);
    }
}
