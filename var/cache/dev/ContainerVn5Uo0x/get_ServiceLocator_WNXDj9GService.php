<?php

namespace ContainerVn5Uo0x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WNXDj9GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WNXDj9G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WNXDj9G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'classe' => ['privates', '.errored..service_locator.WNXDj9G.App\\Entity\\Classe', NULL, 'Cannot autowire service ".service_locator.WNXDj9G": it references class "App\\Entity\\Classe" but no such service exists.'],
            'eleveRepository' => ['privates', 'App\\Repository\\EleveRepository', 'getEleveRepositoryService', true],
        ], [
            'classe' => 'App\\Entity\\Classe',
            'eleveRepository' => 'App\\Repository\\EleveRepository',
        ]);
    }
}
