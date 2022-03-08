<?php

namespace ContainerGZyEx07;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9b5b8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb64d9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd8b11 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'getConnection', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'getMetadataFactory', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'getExpressionBuilder', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'beginTransaction', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'getCache', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'transactional', array('func' => $func), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'commit', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->commit();
    }

    public function rollback()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'rollback', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'getClassMetadata', array('className' => $className), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'createQuery', array('dql' => $dql), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'createNamedQuery', array('name' => $name), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'createQueryBuilder', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'flush', array('entity' => $entity), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'clear', array('entityName' => $entityName), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->clear($entityName);
    }

    public function close()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'close', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->close();
    }

    public function persist($entity)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'persist', array('entity' => $entity), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'remove', array('entity' => $entity), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'refresh', array('entity' => $entity), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'detach', array('entity' => $entity), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'merge', array('entity' => $entity), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'contains', array('entity' => $entity), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'getEventManager', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'getConfiguration', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'isOpen', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'getUnitOfWork', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'getProxyFactory', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'initializeObject', array('obj' => $obj), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'getFilters', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'isFiltersStateClean', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'hasFilters', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return $this->valueHolder9b5b8->hasFilters();
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

        $instance->initializerb64d9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9b5b8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9b5b8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9b5b8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, '__get', ['name' => $name], $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        if (isset(self::$publicPropertiesd8b11[$name])) {
            return $this->valueHolder9b5b8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b5b8;

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

        $targetObject = $this->valueHolder9b5b8;
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
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b5b8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9b5b8;
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
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, '__isset', array('name' => $name), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b5b8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9b5b8;
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
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, '__unset', array('name' => $name), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b5b8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9b5b8;
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
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, '__clone', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        $this->valueHolder9b5b8 = clone $this->valueHolder9b5b8;
    }

    public function __sleep()
    {
        $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, '__sleep', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;

        return array('valueHolder9b5b8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb64d9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb64d9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb64d9 && ($this->initializerb64d9->__invoke($valueHolder9b5b8, $this, 'initializeProxy', array(), $this->initializerb64d9) || 1) && $this->valueHolder9b5b8 = $valueHolder9b5b8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9b5b8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9b5b8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
