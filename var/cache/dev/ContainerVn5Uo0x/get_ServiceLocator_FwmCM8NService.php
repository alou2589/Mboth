<?php

namespace ContainerVn5Uo0x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FwmCM8NService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fwmCM8N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fwmCM8N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'maison' => ['privates', '.errored..service_locator.fwmCM8N.App\\Entity\\Maison', NULL, 'Cannot autowire service ".service_locator.fwmCM8N": it references class "App\\Entity\\Maison" but no such service exists.'],
            'maisonRepository' => ['privates', 'App\\Repository\\MaisonRepository', 'getMaisonRepositoryService', true],
        ], [
            'maison' => 'App\\Entity\\Maison',
            'maisonRepository' => 'App\\Repository\\MaisonRepository',
        ]);
    }
}