<?php

namespace ContainerG0OV6wm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VM5kl7RService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vM5kl7R' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vM5kl7R'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'adminReservation' => ['privates', '.errored..service_locator.vM5kl7R.App\\Entity\\AdminReservation', NULL, 'Cannot autowire service ".service_locator.vM5kl7R": it references class "App\\Entity\\AdminReservation" but no such service exists.'],
        ], [
            'adminReservation' => 'App\\Entity\\AdminReservation',
        ]);
    }
}
