<?php

namespace ContainerHHrGXPM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRespCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\RespCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\RespCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/RespCrudController.php';

        $container->services['App\\Controller\\Admin\\RespCrudController'] = $instance = new \App\Controller\Admin\RespCrudController();

        $instance->setContainer(($container->privates['.service_locator.xqwqHSP'] ?? $container->load('get_ServiceLocator_XqwqHSPService'))->withContext('App\\Controller\\Admin\\RespCrudController', $container));

        return $instance;
    }
}
