<?php

namespace ContainerHHrGXPM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ActionController' shared autowired service.
     *
     * @return \App\Controller\ActionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ActionController.php';

        $container->services['App\\Controller\\ActionController'] = $instance = new \App\Controller\ActionController();

        $instance->setContainer(($container->privates['.service_locator.BE5.yuK'] ?? $container->load('get_ServiceLocator_BE5_YuKService'))->withContext('App\\Controller\\ActionController', $container));

        return $instance;
    }
}
