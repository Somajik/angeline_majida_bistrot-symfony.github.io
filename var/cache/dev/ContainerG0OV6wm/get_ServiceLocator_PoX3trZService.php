<?php

namespace ContainerG0OV6wm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PoX3trZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PoX3trZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PoX3trZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'platJour' => ['privates', '.errored..service_locator.PoX3trZ.App\\Entity\\PlatJour', NULL, 'Cannot autowire service ".service_locator.PoX3trZ": it references class "App\\Entity\\PlatJour" but no such service exists.'],
            'platJourRepository' => ['privates', 'App\\Repository\\PlatJourRepository', 'getPlatJourRepositoryService', true],
        ], [
            'platJour' => 'App\\Entity\\PlatJour',
            'platJourRepository' => 'App\\Repository\\PlatJourRepository',
        ]);
    }
}
