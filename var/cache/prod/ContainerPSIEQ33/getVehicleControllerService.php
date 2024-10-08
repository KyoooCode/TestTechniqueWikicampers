<?php

namespace ContainerPSIEQ33;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVehicleControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\VehicleController' shared autowired service.
     *
     * @return \App\Controller\VehicleController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\VehicleController'] = $instance = new \App\Controller\VehicleController(($container->privates['App\\Repository\\VehicleRepository'] ?? $container->load('getVehicleRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\VehicleController', $container));

        return $instance;
    }
}
