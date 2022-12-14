<?php

namespace ContainerG0OV6wm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QihnnnvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qihnnnv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qihnnnv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'commandeAEmporterRepository' => ['privates', 'App\\Repository\\CommandeAEmporterRepository', 'getCommandeAEmporterRepositoryService', true],
        ], [
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'commandeAEmporterRepository' => 'App\\Repository\\CommandeAEmporterRepository',
        ]);
    }
}
