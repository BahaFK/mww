<?php

namespace ContainerHHrGXPM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder38542 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0ad49 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesad06f = [
        
    ];

    public function getConnection()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'getConnection', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'getMetadataFactory', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'getExpressionBuilder', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'beginTransaction', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'getCache', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'transactional', array('func' => $func), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'commit', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->commit();
    }

    public function rollback()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'rollback', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'getClassMetadata', array('className' => $className), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'createQuery', array('dql' => $dql), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'createNamedQuery', array('name' => $name), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'createQueryBuilder', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'flush', array('entity' => $entity), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'clear', array('entityName' => $entityName), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->clear($entityName);
    }

    public function close()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'close', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->close();
    }

    public function persist($entity)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'persist', array('entity' => $entity), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'remove', array('entity' => $entity), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'refresh', array('entity' => $entity), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'detach', array('entity' => $entity), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'merge', array('entity' => $entity), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'contains', array('entity' => $entity), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'getEventManager', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'getConfiguration', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'isOpen', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'getUnitOfWork', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'getProxyFactory', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'initializeObject', array('obj' => $obj), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'getFilters', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'isFiltersStateClean', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'hasFilters', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return $this->valueHolder38542->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer0ad49 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder38542) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder38542 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder38542->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, '__get', ['name' => $name], $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        if (isset(self::$publicPropertiesad06f[$name])) {
            return $this->valueHolder38542->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38542;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder38542;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38542;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder38542;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, '__isset', array('name' => $name), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38542;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder38542;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, '__unset', array('name' => $name), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38542;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder38542;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, '__clone', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        $this->valueHolder38542 = clone $this->valueHolder38542;
    }

    public function __sleep()
    {
        $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, '__sleep', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;

        return array('valueHolder38542');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0ad49 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0ad49;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0ad49 && ($this->initializer0ad49->__invoke($valueHolder38542, $this, 'initializeProxy', array(), $this->initializer0ad49) || 1) && $this->valueHolder38542 = $valueHolder38542;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder38542;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder38542;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
