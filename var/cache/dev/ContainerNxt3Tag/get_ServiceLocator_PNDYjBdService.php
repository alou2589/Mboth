<?php

namespace ContainerNxt3Tag;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PNDYjBdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PNDYjBd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PNDYjBd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'classeRepository' => ['privates', 'App\\Repository\\ClasseRepository', 'getClasseRepositoryService', true],
            'ecole' => ['privates', '.errored..service_locator.PNDYjBd.App\\Entity\\Ecole', NULL, 'Cannot autowire service ".service_locator.PNDYjBd": it references class "App\\Entity\\Ecole" but no such service exists.'],
        ], [
            'classeRepository' => 'App\\Repository\\ClasseRepository',
            'ecole' => 'App\\Entity\\Ecole',
        ]);
    }
}