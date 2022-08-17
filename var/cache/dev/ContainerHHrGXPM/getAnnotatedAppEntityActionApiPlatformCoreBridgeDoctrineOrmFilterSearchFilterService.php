<?php

namespace ContainerHHrGXPM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotatedAppEntityActionApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'annotated_app_entity_action_api_platform_core_bridge_doctrine_orm_filter_search_filter' shared autowired service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Common/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/ContextAwareFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/AbstractContextAwareFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Common/Filter/SearchFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Common/Filter/SearchFilterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/SearchFilter.php';

        return $container->privates['annotated_app_entity_action_api_platform_core_bridge_doctrine_orm_filter_search_filter'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter(($container->services['doctrine'] ?? $container->getDoctrineService()), NULL, ($container->privates['api_platform.iri_converter'] ?? $container->getApiPlatform_IriConverterService()), ($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()), ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ['id' => 'exact', 'date' => 'ipartial', 'dueDate' => 'ipartial', 'week' => 'ipartial'], ($container->privates['api_platform.identifiers_extractor.cached'] ?? $container->getApiPlatform_IdentifiersExtractor_CachedService()), ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->getSerializer_NameConverter_MetadataAwareService()));
    }
}
