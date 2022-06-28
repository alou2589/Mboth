<?php

namespace ContainerGWbxOD6;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7iuucWXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7iuucWX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7iuucWX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'maisonRepository' => ['privates', 'App\\Repository\\MaisonRepository', 'getMaisonRepositoryService', true],
            'qrcodeservice' => ['privates', 'App\\Service\\QrCodeService', 'getQrCodeServiceService', true],
        ], [
            'maisonRepository' => 'App\\Repository\\MaisonRepository',
            'qrcodeservice' => 'App\\Service\\QrCodeService',
        ]);
    }
}