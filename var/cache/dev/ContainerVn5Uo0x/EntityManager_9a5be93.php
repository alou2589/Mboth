<?php

namespace ContainerVn5Uo0x;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3dc9f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb4d51 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties460b0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'getConnection', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'getMetadataFactory', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'getExpressionBuilder', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'beginTransaction', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'getCache', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'transactional', array('func' => $func), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'commit', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->commit();
    }

    public function rollback()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'rollback', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'getClassMetadata', array('className' => $className), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'createQuery', array('dql' => $dql), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'createNamedQuery', array('name' => $name), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'createQueryBuilder', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'flush', array('entity' => $entity), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'clear', array('entityName' => $entityName), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->clear($entityName);
    }

    public function close()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'close', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->close();
    }

    public function persist($entity)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'persist', array('entity' => $entity), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'remove', array('entity' => $entity), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'refresh', array('entity' => $entity), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'detach', array('entity' => $entity), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'merge', array('entity' => $entity), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'contains', array('entity' => $entity), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'getEventManager', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'getConfiguration', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'isOpen', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'getUnitOfWork', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'getProxyFactory', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'initializeObject', array('obj' => $obj), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'getFilters', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'isFiltersStateClean', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'hasFilters', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return $this->valueHolder3dc9f->hasFilters();
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

        $instance->initializerb4d51 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3dc9f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3dc9f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3dc9f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, '__get', ['name' => $name], $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        if (isset(self::$publicProperties460b0[$name])) {
            return $this->valueHolder3dc9f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dc9f;

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

        $targetObject = $this->valueHolder3dc9f;
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
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dc9f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3dc9f;
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
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, '__isset', array('name' => $name), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dc9f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3dc9f;
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
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, '__unset', array('name' => $name), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dc9f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3dc9f;
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
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, '__clone', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        $this->valueHolder3dc9f = clone $this->valueHolder3dc9f;
    }

    public function __sleep()
    {
        $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, '__sleep', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;

        return array('valueHolder3dc9f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb4d51 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb4d51;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb4d51 && ($this->initializerb4d51->__invoke($valueHolder3dc9f, $this, 'initializeProxy', array(), $this->initializerb4d51) || 1) && $this->valueHolder3dc9f = $valueHolder3dc9f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3dc9f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3dc9f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
