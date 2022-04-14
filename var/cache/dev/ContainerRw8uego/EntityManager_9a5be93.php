<?php

namespace ContainerRw8uego;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9924c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer76e52 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties52198 = [
        
    ];

    public function getConnection()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'getConnection', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'getMetadataFactory', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'getExpressionBuilder', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'beginTransaction', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'getCache', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'transactional', array('func' => $func), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'commit', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->commit();
    }

    public function rollback()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'rollback', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'getClassMetadata', array('className' => $className), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'createQuery', array('dql' => $dql), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'createNamedQuery', array('name' => $name), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'createQueryBuilder', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'flush', array('entity' => $entity), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'clear', array('entityName' => $entityName), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->clear($entityName);
    }

    public function close()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'close', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->close();
    }

    public function persist($entity)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'persist', array('entity' => $entity), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'remove', array('entity' => $entity), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'refresh', array('entity' => $entity), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'detach', array('entity' => $entity), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'merge', array('entity' => $entity), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'contains', array('entity' => $entity), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'getEventManager', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'getConfiguration', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'isOpen', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'getUnitOfWork', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'getProxyFactory', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'initializeObject', array('obj' => $obj), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'getFilters', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'isFiltersStateClean', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'hasFilters', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return $this->valueHolder9924c->hasFilters();
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

        $instance->initializer76e52 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9924c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9924c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9924c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, '__get', ['name' => $name], $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        if (isset(self::$publicProperties52198[$name])) {
            return $this->valueHolder9924c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9924c;

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

        $targetObject = $this->valueHolder9924c;
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
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9924c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9924c;
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
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, '__isset', array('name' => $name), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9924c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9924c;
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
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, '__unset', array('name' => $name), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9924c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9924c;
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
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, '__clone', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        $this->valueHolder9924c = clone $this->valueHolder9924c;
    }

    public function __sleep()
    {
        $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, '__sleep', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;

        return array('valueHolder9924c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer76e52 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer76e52;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer76e52 && ($this->initializer76e52->__invoke($valueHolder9924c, $this, 'initializeProxy', array(), $this->initializer76e52) || 1) && $this->valueHolder9924c = $valueHolder9924c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9924c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9924c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
