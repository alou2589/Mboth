<?php

namespace ContainerNxt3Tag;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y3rPHMGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Y3rPHMG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Y3rPHMG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'maisonRepository' => ['privates', 'App\\Repository\\MaisonRepository', 'getMaisonRepositoryService', true],
        ], [
            'maisonRepository' => 'App\\Repository\\MaisonRepository',
        ]);
    }
}
