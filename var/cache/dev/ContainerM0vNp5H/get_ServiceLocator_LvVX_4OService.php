<?php

namespace ContainerM0vNp5H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LvVX_4OService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lvVX.4O' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lvVX.4O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'maison' => ['privates', '.errored..service_locator.lvVX.4O.App\\Entity\\Maison', NULL, 'Cannot autowire service ".service_locator.lvVX.4O": it references class "App\\Entity\\Maison" but no such service exists.'],
            'personneRepository' => ['privates', 'App\\Repository\\PersonneRepository', 'getPersonneRepositoryService', true],
        ], [
            'maison' => 'App\\Entity\\Maison',
            'personneRepository' => 'App\\Repository\\PersonneRepository',
        ]);
    }
}
