<?php

namespace ContainerGWbxOD6;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQrCodeServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\QrCodeService' shared autowired service.
     *
     * @return \App\Service\QrCodeService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'QrCodeService.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'BuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'Builder.php';

        return $container->privates['App\\Service\\QrCodeService'] = new \App\Service\QrCodeService(new \Endroid\QrCode\Builder\Builder());
    }
}