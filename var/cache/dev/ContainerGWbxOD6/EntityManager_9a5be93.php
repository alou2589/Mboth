<?php

namespace ContainerGWbxOD6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder02562 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer813f6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfd3ad = [
        
    ];

    public function getConnection()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'getConnection', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'getMetadataFactory', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'getExpressionBuilder', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'beginTransaction', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'getCache', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->getCache();
    }

    public function transactional($func)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'transactional', array('func' => $func), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'wrapInTransaction', array('func' => $func), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'commit', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->commit();
    }

    public function rollback()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'rollback', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'getClassMetadata', array('className' => $className), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'createQuery', array('dql' => $dql), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'createNamedQuery', array('name' => $name), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'createQueryBuilder', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'flush', array('entity' => $entity), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'clear', array('entityName' => $entityName), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->clear($entityName);
    }

    public function close()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'close', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->close();
    }

    public function persist($entity)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'persist', array('entity' => $entity), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'remove', array('entity' => $entity), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'refresh', array('entity' => $entity), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'detach', array('entity' => $entity), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'merge', array('entity' => $entity), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'getRepository', array('entityName' => $entityName), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'contains', array('entity' => $entity), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'getEventManager', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'getConfiguration', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'isOpen', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'getUnitOfWork', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'getProxyFactory', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'initializeObject', array('obj' => $obj), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'getFilters', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'isFiltersStateClean', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'hasFilters', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return $this->valueHolder02562->hasFilters();
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

        $instance->initializer813f6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder02562) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder02562 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder02562->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, '__get', ['name' => $name], $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        if (isset(self::$publicPropertiesfd3ad[$name])) {
            return $this->valueHolder02562->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder02562;

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

        $targetObject = $this->valueHolder02562;
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
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder02562;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder02562;
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
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, '__isset', array('name' => $name), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder02562;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder02562;
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
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, '__unset', array('name' => $name), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder02562;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder02562;
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
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, '__clone', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        $this->valueHolder02562 = clone $this->valueHolder02562;
    }

    public function __sleep()
    {
        $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, '__sleep', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;

        return array('valueHolder02562');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer813f6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer813f6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer813f6 && ($this->initializer813f6->__invoke($valueHolder02562, $this, 'initializeProxy', array(), $this->initializer813f6) || 1) && $this->valueHolder02562 = $valueHolder02562;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder02562;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder02562;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
