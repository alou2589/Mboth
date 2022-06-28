<?php

namespace ContainerGWbxOD6;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WG1BPuzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WG1BPuz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WG1BPuz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ecole' => ['privates', '.errored..service_locator.WG1BPuz.App\\Entity\\Ecole', NULL, 'Cannot autowire service ".service_locator.WG1BPuz": it references class "App\\Entity\\Ecole" but no such service exists.'],
            'ecoleRepository' => ['privates', 'App\\Repository\\EcoleRepository', 'getEcoleRepositoryService', true],
        ], [
            'ecole' => 'App\\Entity\\Ecole',
            'ecoleRepository' => 'App\\Repository\\EcoleRepository',
        ]);
    }
}
