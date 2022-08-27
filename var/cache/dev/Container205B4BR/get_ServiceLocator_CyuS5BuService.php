<?php

namespace Container205B4BR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CyuS5BuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cyuS5Bu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cyuS5Bu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'adminReservationRepository' => ['privates', 'App\\Repository\\AdminReservationRepository', 'getAdminReservationRepositoryService', true],
        ], [
            'adminReservationRepository' => 'App\\Repository\\AdminReservationRepository',
        ]);
    }
}
