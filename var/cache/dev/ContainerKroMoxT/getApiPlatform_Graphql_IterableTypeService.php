<?php

namespace ContainerKroMoxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_IterableTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.graphql.iterable_type' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Type\Definition\IterableType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/Type.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/OutputType.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/InputType.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/LeafType.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/NullableType.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/NamedType.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/ScalarType.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/Definition/TypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/Definition/IterableType.php';

        return $container->privates['api_platform.graphql.iterable_type'] = new \ApiPlatform\Core\GraphQl\Type\Definition\IterableType();
    }
}
