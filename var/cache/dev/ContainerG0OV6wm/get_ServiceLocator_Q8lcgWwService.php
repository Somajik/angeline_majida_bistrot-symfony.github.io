<?php

namespace ContainerG0OV6wm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q8lcgWwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Q8lcgWw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Q8lcgWw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', true],
            'formuleRepository' => ['privates', 'App\\Repository\\FormuleRepository', 'getFormuleRepositoryService', true],
        ], [
            'fileUploader' => 'App\\Service\\FileUploader',
            'formuleRepository' => 'App\\Repository\\FormuleRepository',
        ]);
    }
}