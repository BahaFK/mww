<?php

namespace ContainerKroMoxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUnitCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\UnitCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\UnitCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/UnitCrudController.php';

        $container->services['App\\Controller\\Admin\\UnitCrudController'] = $instance = new \App\Controller\Admin\UnitCrudController();

        $instance->setContainer(($container->privates['.service_locator.xqwqHSP'] ?? $container->load('get_ServiceLocator_XqwqHSPService'))->withContext('App\\Controller\\Admin\\UnitCrudController', $container));

        return $instance;
    }
}
