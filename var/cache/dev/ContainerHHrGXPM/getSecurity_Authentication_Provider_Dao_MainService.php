<?php

namespace ContainerHHrGXPM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Provider_Dao_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.provider.dao.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.provider.dao.main" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.provider.dao.main" service is deprecated, use the new authenticator system instead.');

        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/InMemoryUserChecker.php';

        return $container->privates['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), ($container->privates['security.user_checker'] ?? ($container->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\InMemoryUserChecker())), 'main', ($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')), true);
    }
}
