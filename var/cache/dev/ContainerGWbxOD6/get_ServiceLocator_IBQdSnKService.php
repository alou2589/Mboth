<?php

namespace ContainerGWbxOD6;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IBQdSnKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IBQdSnK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IBQdSnK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'quartierRepository' => ['privates', 'App\\Repository\\QuartierRepository', 'getQuartierRepositoryService', true],
        ], [
            'quartierRepository' => 'App\\Repository\\QuartierRepository',
        ]);
    }
}
