<?php

namespace ContainerM0vNp5H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2Z6EINeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2Z6EINe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2Z6EINe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'classe' => ['privates', '.errored..service_locator.2Z6EINe.App\\Entity\\Classe', NULL, 'Cannot autowire service ".service_locator.2Z6EINe": it references class "App\\Entity\\Classe" but no such service exists.'],
            'classeRepository' => ['privates', 'App\\Repository\\ClasseRepository', 'getClasseRepositoryService', true],
        ], [
            'classe' => 'App\\Entity\\Classe',
            'classeRepository' => 'App\\Repository\\ClasseRepository',
        ]);
    }
}
