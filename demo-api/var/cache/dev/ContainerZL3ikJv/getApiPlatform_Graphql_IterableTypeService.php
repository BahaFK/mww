<?php

namespace ContainerZL3ikJv;

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
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'webonyx'.\DIRECTORY_SEPARATOR.'graphql-php'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Definition'.\DIRECTORY_SEPARATOR.'Type.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'webonyx'.\DIRECTORY_SEPARATOR.'graphql-php'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Definition'.\DIRECTORY_SEPARATOR.'OutputType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'webonyx'.\DIRECTORY_SEPARATOR.'graphql-php'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Definition'.\DIRECTORY_SEPARATOR.'InputType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'webonyx'.\DIRECTORY_SEPARATOR.'graphql-php'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Definition'.\DIRECTORY_SEPARATOR.'LeafType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'webonyx'.\DIRECTORY_SEPARATOR.'graphql-php'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Definition'.\DIRECTORY_SEPARATOR.'NullableType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'webonyx'.\DIRECTORY_SEPARATOR.'graphql-php'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Definition'.\DIRECTORY_SEPARATOR.'NamedType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'webonyx'.\DIRECTORY_SEPARATOR.'graphql-php'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Definition'.\DIRECTORY_SEPARATOR.'ScalarType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Definition'.\DIRECTORY_SEPARATOR.'TypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Definition'.\DIRECTORY_SEPARATOR.'IterableType.php';

        return $container->privates['api_platform.graphql.iterable_type'] = new \ApiPlatform\Core\GraphQl\Type\Definition\IterableType();
    }
}
