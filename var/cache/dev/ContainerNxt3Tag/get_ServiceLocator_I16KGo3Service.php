<?php

namespace ContainerNxt3Tag;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I16KGo3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.I16KGo3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.I16KGo3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'typeArbre' => ['privates', '.errored..service_locator.I16KGo3.App\\Entity\\TypeArbre', NULL, 'Cannot autowire service ".service_locator.I16KGo3": it references class "App\\Entity\\TypeArbre" but no such service exists.'],
            'typeArbreRepository' => ['privates', 'App\\Repository\\TypeArbreRepository', 'getTypeArbreRepositoryService', true],
        ], [
            'typeArbre' => 'App\\Entity\\TypeArbre',
            'typeArbreRepository' => 'App\\Repository\\TypeArbreRepository',
        ]);
    }
}
