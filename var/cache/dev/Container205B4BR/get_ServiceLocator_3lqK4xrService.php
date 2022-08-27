<?php

namespace Container205B4BR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3lqK4xrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3lqK4xr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3lqK4xr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminReservationController::delete' => ['privates', '.service_locator.S8n88ef', 'get_ServiceLocator_S8n88efService', true],
            'App\\Controller\\AdminReservationController::edit' => ['privates', '.service_locator.S8n88ef', 'get_ServiceLocator_S8n88efService', true],
            'App\\Controller\\AdminReservationController::index' => ['privates', '.service_locator.cyuS5Bu', 'get_ServiceLocator_CyuS5BuService', true],
            'App\\Controller\\AdminReservationController::new' => ['privates', '.service_locator.cyuS5Bu', 'get_ServiceLocator_CyuS5BuService', true],
            'App\\Controller\\AdminReservationController::show' => ['privates', '.service_locator.vM5kl7R', 'get_ServiceLocator_VM5kl7RService', true],
            'App\\Controller\\CarteRestaurantController::index' => ['privates', '.service_locator.p17h.vd', 'get_ServiceLocator_P17h_VdService', true],
            'App\\Controller\\CategoryController::delete' => ['privates', '.service_locator.KksGd9j', 'get_ServiceLocator_KksGd9jService', true],
            'App\\Controller\\CategoryController::edit' => ['privates', '.service_locator.KksGd9j', 'get_ServiceLocator_KksGd9jService', true],
            'App\\Controller\\CategoryController::index' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\CategoryController::new' => ['privates', '.service_locator.TiWofRm', 'get_ServiceLocator_TiWofRmService', true],
            'App\\Controller\\CategoryController::show' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\CommandeAEmporterController::delete' => ['privates', '.service_locator.cUlN4D1', 'get_ServiceLocator_CUlN4D1Service', true],
            'App\\Controller\\CommandeAEmporterController::edit' => ['privates', '.service_locator.cUlN4D1', 'get_ServiceLocator_CUlN4D1Service', true],
            'App\\Controller\\CommandeAEmporterController::emporter' => ['privates', '.service_locator.p17h.vd', 'get_ServiceLocator_P17h_VdService', true],
            'App\\Controller\\CommandeAEmporterController::index' => ['privates', '.service_locator..VHq7ud', 'get_ServiceLocator__VHq7udService', true],
            'App\\Controller\\CommandeAEmporterController::new' => ['privates', '.service_locator.Ng7JtcP', 'get_ServiceLocator_Ng7JtcPService', true],
            'App\\Controller\\CommandeAEmporterController::show' => ['privates', '.service_locator.HhXDO5P', 'get_ServiceLocator_HhXDO5PService', true],
            'App\\Controller\\FormuleController::delete' => ['privates', '.service_locator.xGgS2UZ', 'get_ServiceLocator_XGgS2UZService', true],
            'App\\Controller\\FormuleController::edit' => ['privates', '.service_locator.xGgS2UZ', 'get_ServiceLocator_XGgS2UZService', true],
            'App\\Controller\\FormuleController::index' => ['privates', '.service_locator.ejpLZGD', 'get_ServiceLocator_EjpLZGDService', true],
            'App\\Controller\\FormuleController::new' => ['privates', '.service_locator.Q8lcgWw', 'get_ServiceLocator_Q8lcgWwService', true],
            'App\\Controller\\FormuleController::show' => ['privates', '.service_locator.ZX.KOH_', 'get_ServiceLocator_ZX_KOHService', true],
            'App\\Controller\\PlatController::delete' => ['privates', '.service_locator.f1jOqKx', 'get_ServiceLocator_F1jOqKxService', true],
            'App\\Controller\\PlatController::edit' => ['privates', '.service_locator.f1jOqKx', 'get_ServiceLocator_F1jOqKxService', true],
            'App\\Controller\\PlatController::index' => ['privates', '.service_locator..186m20', 'get_ServiceLocator__186m20Service', true],
            'App\\Controller\\PlatController::new' => ['privates', '.service_locator.eHNgFYg', 'get_ServiceLocator_EHNgFYgService', true],
            'App\\Controller\\PlatController::show' => ['privates', '.service_locator.vZOW8D.', 'get_ServiceLocator_VZOW8D_Service', true],
            'App\\Controller\\PlatJourController::delete' => ['privates', '.service_locator.PoX3trZ', 'get_ServiceLocator_PoX3trZService', true],
            'App\\Controller\\PlatJourController::edit' => ['privates', '.service_locator.PoX3trZ', 'get_ServiceLocator_PoX3trZService', true],
            'App\\Controller\\PlatJourController::index' => ['privates', '.service_locator.qSrR5OF', 'get_ServiceLocator_QSrR5OFService', true],
            'App\\Controller\\PlatJourController::new' => ['privates', '.service_locator.1IVig7Z', 'get_ServiceLocator_1IVig7ZService', true],
            'App\\Controller\\PlatJourController::show' => ['privates', '.service_locator.Y_kl6Mq', 'get_ServiceLocator_YKl6MqService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.B3Rkt.q', 'get_ServiceLocator_B3Rkt_QService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.mzjt3rI', 'get_ServiceLocator_Mzjt3rIService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\admin\\UserController::delete' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\admin\\UserController::edit' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\admin\\UserController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\admin\\UserController::new' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\admin\\UserController::show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdminReservationController:delete' => ['privates', '.service_locator.S8n88ef', 'get_ServiceLocator_S8n88efService', true],
            'App\\Controller\\AdminReservationController:edit' => ['privates', '.service_locator.S8n88ef', 'get_ServiceLocator_S8n88efService', true],
            'App\\Controller\\AdminReservationController:index' => ['privates', '.service_locator.cyuS5Bu', 'get_ServiceLocator_CyuS5BuService', true],
            'App\\Controller\\AdminReservationController:new' => ['privates', '.service_locator.cyuS5Bu', 'get_ServiceLocator_CyuS5BuService', true],
            'App\\Controller\\AdminReservationController:show' => ['privates', '.service_locator.vM5kl7R', 'get_ServiceLocator_VM5kl7RService', true],
            'App\\Controller\\CarteRestaurantController:index' => ['privates', '.service_locator.p17h.vd', 'get_ServiceLocator_P17h_VdService', true],
            'App\\Controller\\CategoryController:delete' => ['privates', '.service_locator.KksGd9j', 'get_ServiceLocator_KksGd9jService', true],
            'App\\Controller\\CategoryController:edit' => ['privates', '.service_locator.KksGd9j', 'get_ServiceLocator_KksGd9jService', true],
            'App\\Controller\\CategoryController:index' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\CategoryController:new' => ['privates', '.service_locator.TiWofRm', 'get_ServiceLocator_TiWofRmService', true],
            'App\\Controller\\CategoryController:show' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\CommandeAEmporterController:delete' => ['privates', '.service_locator.cUlN4D1', 'get_ServiceLocator_CUlN4D1Service', true],
            'App\\Controller\\CommandeAEmporterController:edit' => ['privates', '.service_locator.cUlN4D1', 'get_ServiceLocator_CUlN4D1Service', true],
            'App\\Controller\\CommandeAEmporterController:emporter' => ['privates', '.service_locator.p17h.vd', 'get_ServiceLocator_P17h_VdService', true],
            'App\\Controller\\CommandeAEmporterController:index' => ['privates', '.service_locator..VHq7ud', 'get_ServiceLocator__VHq7udService', true],
            'App\\Controller\\CommandeAEmporterController:new' => ['privates', '.service_locator.Ng7JtcP', 'get_ServiceLocator_Ng7JtcPService', true],
            'App\\Controller\\CommandeAEmporterController:show' => ['privates', '.service_locator.HhXDO5P', 'get_ServiceLocator_HhXDO5PService', true],
            'App\\Controller\\FormuleController:delete' => ['privates', '.service_locator.xGgS2UZ', 'get_ServiceLocator_XGgS2UZService', true],
            'App\\Controller\\FormuleController:edit' => ['privates', '.service_locator.xGgS2UZ', 'get_ServiceLocator_XGgS2UZService', true],
            'App\\Controller\\FormuleController:index' => ['privates', '.service_locator.ejpLZGD', 'get_ServiceLocator_EjpLZGDService', true],
            'App\\Controller\\FormuleController:new' => ['privates', '.service_locator.Q8lcgWw', 'get_ServiceLocator_Q8lcgWwService', true],
            'App\\Controller\\FormuleController:show' => ['privates', '.service_locator.ZX.KOH_', 'get_ServiceLocator_ZX_KOHService', true],
            'App\\Controller\\PlatController:delete' => ['privates', '.service_locator.f1jOqKx', 'get_ServiceLocator_F1jOqKxService', true],
            'App\\Controller\\PlatController:edit' => ['privates', '.service_locator.f1jOqKx', 'get_ServiceLocator_F1jOqKxService', true],
            'App\\Controller\\PlatController:index' => ['privates', '.service_locator..186m20', 'get_ServiceLocator__186m20Service', true],
            'App\\Controller\\PlatController:new' => ['privates', '.service_locator.eHNgFYg', 'get_ServiceLocator_EHNgFYgService', true],
            'App\\Controller\\PlatController:show' => ['privates', '.service_locator.vZOW8D.', 'get_ServiceLocator_VZOW8D_Service', true],
            'App\\Controller\\PlatJourController:delete' => ['privates', '.service_locator.PoX3trZ', 'get_ServiceLocator_PoX3trZService', true],
            'App\\Controller\\PlatJourController:edit' => ['privates', '.service_locator.PoX3trZ', 'get_ServiceLocator_PoX3trZService', true],
            'App\\Controller\\PlatJourController:index' => ['privates', '.service_locator.qSrR5OF', 'get_ServiceLocator_QSrR5OFService', true],
            'App\\Controller\\PlatJourController:new' => ['privates', '.service_locator.1IVig7Z', 'get_ServiceLocator_1IVig7ZService', true],
            'App\\Controller\\PlatJourController:show' => ['privates', '.service_locator.Y_kl6Mq', 'get_ServiceLocator_YKl6MqService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.B3Rkt.q', 'get_ServiceLocator_B3Rkt_QService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.mzjt3rI', 'get_ServiceLocator_Mzjt3rIService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\admin\\UserController:delete' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\admin\\UserController:edit' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\admin\\UserController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\admin\\UserController:new' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\admin\\UserController:show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdminReservationController::delete' => '?',
            'App\\Controller\\AdminReservationController::edit' => '?',
            'App\\Controller\\AdminReservationController::index' => '?',
            'App\\Controller\\AdminReservationController::new' => '?',
            'App\\Controller\\AdminReservationController::show' => '?',
            'App\\Controller\\CarteRestaurantController::index' => '?',
            'App\\Controller\\CategoryController::delete' => '?',
            'App\\Controller\\CategoryController::edit' => '?',
            'App\\Controller\\CategoryController::index' => '?',
            'App\\Controller\\CategoryController::new' => '?',
            'App\\Controller\\CategoryController::show' => '?',
            'App\\Controller\\CommandeAEmporterController::delete' => '?',
            'App\\Controller\\CommandeAEmporterController::edit' => '?',
            'App\\Controller\\CommandeAEmporterController::emporter' => '?',
            'App\\Controller\\CommandeAEmporterController::index' => '?',
            'App\\Controller\\CommandeAEmporterController::new' => '?',
            'App\\Controller\\CommandeAEmporterController::show' => '?',
            'App\\Controller\\FormuleController::delete' => '?',
            'App\\Controller\\FormuleController::edit' => '?',
            'App\\Controller\\FormuleController::index' => '?',
            'App\\Controller\\FormuleController::new' => '?',
            'App\\Controller\\FormuleController::show' => '?',
            'App\\Controller\\PlatController::delete' => '?',
            'App\\Controller\\PlatController::edit' => '?',
            'App\\Controller\\PlatController::index' => '?',
            'App\\Controller\\PlatController::new' => '?',
            'App\\Controller\\PlatController::show' => '?',
            'App\\Controller\\PlatJourController::delete' => '?',
            'App\\Controller\\PlatJourController::edit' => '?',
            'App\\Controller\\PlatJourController::index' => '?',
            'App\\Controller\\PlatJourController::new' => '?',
            'App\\Controller\\PlatJourController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\admin\\UserController::delete' => '?',
            'App\\Controller\\admin\\UserController::edit' => '?',
            'App\\Controller\\admin\\UserController::index' => '?',
            'App\\Controller\\admin\\UserController::new' => '?',
            'App\\Controller\\admin\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminReservationController:delete' => '?',
            'App\\Controller\\AdminReservationController:edit' => '?',
            'App\\Controller\\AdminReservationController:index' => '?',
            'App\\Controller\\AdminReservationController:new' => '?',
            'App\\Controller\\AdminReservationController:show' => '?',
            'App\\Controller\\CarteRestaurantController:index' => '?',
            'App\\Controller\\CategoryController:delete' => '?',
            'App\\Controller\\CategoryController:edit' => '?',
            'App\\Controller\\CategoryController:index' => '?',
            'App\\Controller\\CategoryController:new' => '?',
            'App\\Controller\\CategoryController:show' => '?',
            'App\\Controller\\CommandeAEmporterController:delete' => '?',
            'App\\Controller\\CommandeAEmporterController:edit' => '?',
            'App\\Controller\\CommandeAEmporterController:emporter' => '?',
            'App\\Controller\\CommandeAEmporterController:index' => '?',
            'App\\Controller\\CommandeAEmporterController:new' => '?',
            'App\\Controller\\CommandeAEmporterController:show' => '?',
            'App\\Controller\\FormuleController:delete' => '?',
            'App\\Controller\\FormuleController:edit' => '?',
            'App\\Controller\\FormuleController:index' => '?',
            'App\\Controller\\FormuleController:new' => '?',
            'App\\Controller\\FormuleController:show' => '?',
            'App\\Controller\\PlatController:delete' => '?',
            'App\\Controller\\PlatController:edit' => '?',
            'App\\Controller\\PlatController:index' => '?',
            'App\\Controller\\PlatController:new' => '?',
            'App\\Controller\\PlatController:show' => '?',
            'App\\Controller\\PlatJourController:delete' => '?',
            'App\\Controller\\PlatJourController:edit' => '?',
            'App\\Controller\\PlatJourController:index' => '?',
            'App\\Controller\\PlatJourController:new' => '?',
            'App\\Controller\\PlatJourController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\admin\\UserController:delete' => '?',
            'App\\Controller\\admin\\UserController:edit' => '?',
            'App\\Controller\\admin\\UserController:index' => '?',
            'App\\Controller\\admin\\UserController:new' => '?',
            'App\\Controller\\admin\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
