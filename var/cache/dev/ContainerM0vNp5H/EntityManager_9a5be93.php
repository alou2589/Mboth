<?php

namespace ContainerM0vNp5H;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder59452 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2d2ba = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties893a6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'getConnection', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'getMetadataFactory', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'getExpressionBuilder', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'beginTransaction', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'getCache', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'transactional', array('func' => $func), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'commit', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->commit();
    }

    public function rollback()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'rollback', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'getClassMetadata', array('className' => $className), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'createQuery', array('dql' => $dql), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'createNamedQuery', array('name' => $name), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'createQueryBuilder', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'flush', array('entity' => $entity), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'clear', array('entityName' => $entityName), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->clear($entityName);
    }

    public function close()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'close', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->close();
    }

    public function persist($entity)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'persist', array('entity' => $entity), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'remove', array('entity' => $entity), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'refresh', array('entity' => $entity), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'detach', array('entity' => $entity), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'merge', array('entity' => $entity), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'contains', array('entity' => $entity), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'getEventManager', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'getConfiguration', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'isOpen', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'getUnitOfWork', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'getProxyFactory', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'initializeObject', array('obj' => $obj), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'getFilters', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'isFiltersStateClean', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'hasFilters', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return $this->valueHolder59452->hasFilters();
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

        $instance->initializer2d2ba = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder59452) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder59452 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder59452->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, '__get', ['name' => $name], $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        if (isset(self::$publicProperties893a6[$name])) {
            return $this->valueHolder59452->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59452;

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

        $targetObject = $this->valueHolder59452;
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
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59452;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder59452;
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
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, '__isset', array('name' => $name), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59452;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder59452;
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
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, '__unset', array('name' => $name), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59452;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder59452;
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
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, '__clone', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        $this->valueHolder59452 = clone $this->valueHolder59452;
    }

    public function __sleep()
    {
        $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, '__sleep', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;

        return array('valueHolder59452');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2d2ba = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2d2ba;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2d2ba && ($this->initializer2d2ba->__invoke($valueHolder59452, $this, 'initializeProxy', array(), $this->initializer2d2ba) || 1) && $this->valueHolder59452 = $valueHolder59452;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder59452;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder59452;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
