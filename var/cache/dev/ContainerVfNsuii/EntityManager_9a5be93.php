<?php

namespace ContainerVfNsuii;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb612e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer236eb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties07632 = [
        
    ];

    public function getConnection()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'getConnection', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'getMetadataFactory', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'getExpressionBuilder', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'beginTransaction', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'getCache', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'transactional', array('func' => $func), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'commit', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->commit();
    }

    public function rollback()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'rollback', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'getClassMetadata', array('className' => $className), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'createQuery', array('dql' => $dql), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'createNamedQuery', array('name' => $name), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'createQueryBuilder', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'flush', array('entity' => $entity), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'clear', array('entityName' => $entityName), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->clear($entityName);
    }

    public function close()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'close', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->close();
    }

    public function persist($entity)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'persist', array('entity' => $entity), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'remove', array('entity' => $entity), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'refresh', array('entity' => $entity), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'detach', array('entity' => $entity), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'merge', array('entity' => $entity), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'contains', array('entity' => $entity), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'getEventManager', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'getConfiguration', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'isOpen', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'getUnitOfWork', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'getProxyFactory', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'initializeObject', array('obj' => $obj), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'getFilters', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'isFiltersStateClean', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'hasFilters', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return $this->valueHolderb612e->hasFilters();
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

        $instance->initializer236eb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb612e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb612e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb612e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, '__get', ['name' => $name], $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        if (isset(self::$publicProperties07632[$name])) {
            return $this->valueHolderb612e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb612e;

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

        $targetObject = $this->valueHolderb612e;
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
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb612e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb612e;
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
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, '__isset', array('name' => $name), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb612e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb612e;
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
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, '__unset', array('name' => $name), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb612e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb612e;
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
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, '__clone', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        $this->valueHolderb612e = clone $this->valueHolderb612e;
    }

    public function __sleep()
    {
        $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, '__sleep', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;

        return array('valueHolderb612e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer236eb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer236eb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer236eb && ($this->initializer236eb->__invoke($valueHolderb612e, $this, 'initializeProxy', array(), $this->initializer236eb) || 1) && $this->valueHolderb612e = $valueHolderb612e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb612e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb612e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
