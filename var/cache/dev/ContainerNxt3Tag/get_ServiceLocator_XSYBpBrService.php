<?php

namespace ContainerNxt3Tag;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XSYBpBrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xSYBpBr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xSYBpBr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ecole' => ['privates', '.errored..service_locator.xSYBpBr.App\\Entity\\Ecole', NULL, 'Cannot autowire service ".service_locator.xSYBpBr": it references class "App\\Entity\\Ecole" but no such service exists.'],
        ], [
            'ecole' => 'App\\Entity\\Ecole',
        ]);
    }
}
