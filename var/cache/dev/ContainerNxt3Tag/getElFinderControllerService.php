<?php

namespace ContainerNxt3Tag;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getElFinderControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'FM\ElfinderBundle\Controller\ElFinderController' shared service.
     *
     * @return \FM\ElfinderBundle\Controller\ElFinderController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'helios-ag'.\DIRECTORY_SEPARATOR.'fm-elfinder-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ElFinderController.php';

        return $container->services['FM\\ElfinderBundle\\Controller\\ElFinderController'] = new \FM\ElfinderBundle\Controller\ElFinderController(($container->privates['twig'] ?? $container->getTwigService()), $container->parameters['fm_elfinder']);
    }
}
