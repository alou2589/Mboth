<?php

namespace ContainerVfNsuii;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LLcUlUBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lLcUlUB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lLcUlUB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'typeMaladie' => ['privates', '.errored..service_locator.lLcUlUB.App\\Entity\\TypeMaladie', NULL, 'Cannot autowire service ".service_locator.lLcUlUB": it references class "App\\Entity\\TypeMaladie" but no such service exists.'],
        ], [
            'typeMaladie' => 'App\\Entity\\TypeMaladie',
        ]);
    }
}
