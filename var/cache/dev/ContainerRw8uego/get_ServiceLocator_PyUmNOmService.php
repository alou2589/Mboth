<?php

namespace ContainerRw8uego;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PyUmNOmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PyUmNOm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PyUmNOm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'secteur' => ['privates', '.errored..service_locator.PyUmNOm.App\\Entity\\Secteur', NULL, 'Cannot autowire service ".service_locator.PyUmNOm": it references class "App\\Entity\\Secteur" but no such service exists.'],
        ], [
            'secteur' => 'App\\Entity\\Secteur',
        ]);
    }
}