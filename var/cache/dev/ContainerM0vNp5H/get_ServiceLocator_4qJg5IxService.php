<?php

namespace ContainerM0vNp5H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4qJg5IxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4qJg5Ix' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4qJg5Ix'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'quartier' => ['privates', '.errored..service_locator.4qJg5Ix.App\\Entity\\Quartier', NULL, 'Cannot autowire service ".service_locator.4qJg5Ix": it references class "App\\Entity\\Quartier" but no such service exists.'],
            'quartierRepository' => ['privates', 'App\\Repository\\QuartierRepository', 'getQuartierRepositoryService', true],
        ], [
            'quartier' => 'App\\Entity\\Quartier',
            'quartierRepository' => 'App\\Repository\\QuartierRepository',
        ]);
    }
}
