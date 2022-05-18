<?php

namespace ContainerDxOmyAN;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder77c8a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer63f16 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties19618 = [
        
    ];

    public function getConnection()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'getConnection', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'getMetadataFactory', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'getExpressionBuilder', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'beginTransaction', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'getCache', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'transactional', array('func' => $func), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'commit', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->commit();
    }

    public function rollback()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'rollback', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'getClassMetadata', array('className' => $className), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'createQuery', array('dql' => $dql), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'createNamedQuery', array('name' => $name), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'createQueryBuilder', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'flush', array('entity' => $entity), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'clear', array('entityName' => $entityName), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->clear($entityName);
    }

    public function close()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'close', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->close();
    }

    public function persist($entity)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'persist', array('entity' => $entity), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'remove', array('entity' => $entity), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'refresh', array('entity' => $entity), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'detach', array('entity' => $entity), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'merge', array('entity' => $entity), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'contains', array('entity' => $entity), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'getEventManager', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'getConfiguration', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'isOpen', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'getUnitOfWork', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'getProxyFactory', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'initializeObject', array('obj' => $obj), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'getFilters', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'isFiltersStateClean', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'hasFilters', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return $this->valueHolder77c8a->hasFilters();
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

        $instance->initializer63f16 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder77c8a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder77c8a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder77c8a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, '__get', ['name' => $name], $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        if (isset(self::$publicProperties19618[$name])) {
            return $this->valueHolder77c8a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77c8a;

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

        $targetObject = $this->valueHolder77c8a;
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
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77c8a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder77c8a;
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
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, '__isset', array('name' => $name), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77c8a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder77c8a;
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
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, '__unset', array('name' => $name), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77c8a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder77c8a;
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
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, '__clone', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        $this->valueHolder77c8a = clone $this->valueHolder77c8a;
    }

    public function __sleep()
    {
        $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, '__sleep', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;

        return array('valueHolder77c8a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer63f16 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer63f16;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer63f16 && ($this->initializer63f16->__invoke($valueHolder77c8a, $this, 'initializeProxy', array(), $this->initializer63f16) || 1) && $this->valueHolder77c8a = $valueHolder77c8a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder77c8a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder77c8a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
