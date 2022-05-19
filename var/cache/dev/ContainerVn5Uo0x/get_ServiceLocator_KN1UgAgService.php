<?php

namespace ContainerVn5Uo0x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KN1UgAgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kN1UgAg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kN1UgAg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'celluleRepository' => ['privates', 'App\\Repository\\CelluleRepository', 'getCelluleRepositoryService', true],
        ], [
            'celluleRepository' => 'App\\Repository\\CelluleRepository',
        ]);
    }
}
