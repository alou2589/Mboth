<?php

namespace Container0M0gQq4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GQ9n08OService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GQ9n08O' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GQ9n08O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'secteur' => ['privates', '.errored..service_locator.GQ9n08O.App\\Entity\\Secteur', NULL, 'Cannot autowire service ".service_locator.GQ9n08O": it references class "App\\Entity\\Secteur" but no such service exists.'],
            'secteurRepository' => ['privates', 'App\\Repository\\SecteurRepository', 'getSecteurRepositoryService', true],
        ], [
            'secteur' => 'App\\Entity\\Secteur',
            'secteurRepository' => 'App\\Repository\\SecteurRepository',
        ]);
    }
}
