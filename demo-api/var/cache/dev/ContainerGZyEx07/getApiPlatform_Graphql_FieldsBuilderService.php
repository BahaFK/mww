<?php

namespace ContainerGZyEx07;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_FieldsBuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.graphql.fields_builder' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Type\FieldsBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FieldsBuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FieldsBuilder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TypeBuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TypeBuilder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'ResourceFieldResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TypeConverterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TypeConverter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ResolverFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ItemResolverFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Stage'.\DIRECTORY_SEPARATOR.'ReadStageInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'ArrayTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'IdentifierTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Stage'.\DIRECTORY_SEPARATOR.'ReadStage.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'SerializerContextBuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'SerializerContextBuilder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Stage'.\DIRECTORY_SEPARATOR.'SecurityStageInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Stage'.\DIRECTORY_SEPARATOR.'SecurityStage.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Stage'.\DIRECTORY_SEPARATOR.'SecurityPostDenormalizeStageInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Stage'.\DIRECTORY_SEPARATOR.'SecurityPostDenormalizeStage.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Stage'.\DIRECTORY_SEPARATOR.'SerializeStageInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Stage'.\DIRECTORY_SEPARATOR.'SerializeStage.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'CollectionResolverFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ItemMutationResolverFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Stage'.\DIRECTORY_SEPARATOR.'DeserializeStageInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Stage'.\DIRECTORY_SEPARATOR.'DeserializeStage.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Stage'.\DIRECTORY_SEPARATOR.'WriteStageInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Stage'.\DIRECTORY_SEPARATOR.'WriteStage.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Stage'.\DIRECTORY_SEPARATOR.'ValidateStageInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Stage'.\DIRECTORY_SEPARATOR.'ValidateStage.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ItemSubscriptionResolverFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Subscription'.\DIRECTORY_SEPARATOR.'SubscriptionManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'SortTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Subscription'.\DIRECTORY_SEPARATOR.'SubscriptionManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Subscription'.\DIRECTORY_SEPARATOR.'SubscriptionIdentifierGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Subscription'.\DIRECTORY_SEPARATOR.'SubscriptionIdentifierGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TypesContainerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TypesContainer.php';

        $a = ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());
        $b = ($container->privates['api_platform.graphql.types_container'] ?? ($container->privates['api_platform.graphql.types_container'] = new \ApiPlatform\Core\GraphQl\Type\TypesContainer()));
        $c = ($container->privates['api_platform.iri_converter'] ?? $container->getApiPlatform_IriConverterService());
        $d = ($container->privates['api_platform.pagination'] ?? $container->load('getApiPlatform_PaginationService'));

        $e = new \ApiPlatform\Core\GraphQl\Type\TypeBuilder($b, new \ApiPlatform\Core\GraphQl\Resolver\ResourceFieldResolver($c), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'api_platform.graphql.fields_builder' => ['privates', 'api_platform.graphql.fields_builder', 'getApiPlatform_Graphql_FieldsBuilderService', true],
        ], [
            'api_platform.graphql.fields_builder' => '?',
        ]), $d);
        $f = ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->getSerializer_NameConverter_MetadataAwareService());

        $g = new \ApiPlatform\Core\GraphQl\Serializer\SerializerContextBuilder($a, $f);

        $h = new \ApiPlatform\Core\GraphQl\Resolver\Stage\ReadStage($a, $c, ($container->privates['debug.api_platform.collection_data_provider'] ?? $container->getDebug_ApiPlatform_CollectionDataProviderService()), ($container->privates['debug.api_platform.subresource_data_provider'] ?? $container->getDebug_ApiPlatform_SubresourceDataProviderService()), $g, '_');
        $i = ($container->privates['api_platform.security.resource_access_checker'] ?? $container->getApiPlatform_Security_ResourceAccessCheckerService());

        $j = new \ApiPlatform\Core\GraphQl\Resolver\Stage\SecurityStage($a, $i);
        $k = new \ApiPlatform\Core\GraphQl\Resolver\Stage\SecurityPostDenormalizeStage($a, $i);
        $l = ($container->services['.container.private.serializer'] ?? $container->get_Container_Private_SerializerService());

        $m = new \ApiPlatform\Core\GraphQl\Resolver\Stage\SerializeStage($a, $l, $g, $d);
        $n = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], []);

        return $container->privates['api_platform.graphql.fields_builder'] = new \ApiPlatform\Core\GraphQl\Type\FieldsBuilder(($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($container->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), $a, $b, $e, new \ApiPlatform\Core\GraphQl\Type\TypeConverter($e, $b, $a), new \ApiPlatform\Core\GraphQl\Resolver\Factory\ItemResolverFactory($h, $j, $k, $m, $n, $a), new \ApiPlatform\Core\GraphQl\Resolver\Factory\CollectionResolverFactory($h, $j, $k, $m, $n, $a, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))), new \ApiPlatform\Core\GraphQl\Resolver\Factory\ItemMutationResolverFactory($h, $j, $k, $m, new \ApiPlatform\Core\GraphQl\Resolver\Stage\DeserializeStage($a, $l, $g), new \ApiPlatform\Core\GraphQl\Resolver\Stage\WriteStage($a, ($container->privates['debug.api_platform.data_persister'] ?? $container->load('getDebug_ApiPlatform_DataPersisterService')), $g), new \ApiPlatform\Core\GraphQl\Resolver\Stage\ValidateStage($a, ($container->privates['api_platform.validator'] ?? $container->load('getApiPlatform_ValidatorService'))), ($container->privates['api_platform.graphql.mutation_resolver_locator'] ?? ($container->privates['api_platform.graphql.mutation_resolver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], []))), $a), new \ApiPlatform\Core\GraphQl\Resolver\Factory\ItemSubscriptionResolverFactory($h, $j, $m, $a, new \ApiPlatform\Core\GraphQl\Subscription\SubscriptionManager(($container->privates['api_platform.graphql.cache.subscription'] ?? $container->load('getApiPlatform_Graphql_Cache_SubscriptionService')), new \ApiPlatform\Core\GraphQl\Subscription\SubscriptionIdentifierGenerator(), $m, $c), NULL), ($container->privates['api_platform.filter_locator'] ?? $container->getApiPlatform_FilterLocatorService()), $d, $f, '_');
    }
}
