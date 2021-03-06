<?php

namespace ContainerLD0d9hP;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CDOuICPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cDOuICP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cDOuICP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'maison' => ['privates', '.errored..service_locator.cDOuICP.App\\Entity\\Maison', NULL, 'Cannot autowire service ".service_locator.cDOuICP": it references class "App\\Entity\\Maison" but no such service exists.'],
        ], [
            'maison' => 'App\\Entity\\Maison',
        ]);
    }
}
