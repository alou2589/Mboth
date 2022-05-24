<?php

namespace ContainerHe6Bw5K;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf9e8c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera0645 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties105ce = [
        
    ];

    public function getConnection()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'getConnection', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'getMetadataFactory', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'getExpressionBuilder', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'beginTransaction', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'getCache', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->getCache();
    }

    public function transactional($func)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'transactional', array('func' => $func), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'wrapInTransaction', array('func' => $func), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'commit', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->commit();
    }

    public function rollback()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'rollback', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'getClassMetadata', array('className' => $className), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'createQuery', array('dql' => $dql), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'createNamedQuery', array('name' => $name), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'createQueryBuilder', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'flush', array('entity' => $entity), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'clear', array('entityName' => $entityName), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->clear($entityName);
    }

    public function close()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'close', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->close();
    }

    public function persist($entity)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'persist', array('entity' => $entity), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'remove', array('entity' => $entity), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'refresh', array('entity' => $entity), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'detach', array('entity' => $entity), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'merge', array('entity' => $entity), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'getRepository', array('entityName' => $entityName), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'contains', array('entity' => $entity), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'getEventManager', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'getConfiguration', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'isOpen', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'getUnitOfWork', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'getProxyFactory', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'initializeObject', array('obj' => $obj), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'getFilters', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'isFiltersStateClean', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'hasFilters', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return $this->valueHolderf9e8c->hasFilters();
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

        $instance->initializera0645 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf9e8c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf9e8c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf9e8c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, '__get', ['name' => $name], $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        if (isset(self::$publicProperties105ce[$name])) {
            return $this->valueHolderf9e8c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9e8c;

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

        $targetObject = $this->valueHolderf9e8c;
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
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9e8c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf9e8c;
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
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, '__isset', array('name' => $name), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9e8c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf9e8c;
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
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, '__unset', array('name' => $name), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9e8c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf9e8c;
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
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, '__clone', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        $this->valueHolderf9e8c = clone $this->valueHolderf9e8c;
    }

    public function __sleep()
    {
        $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, '__sleep', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;

        return array('valueHolderf9e8c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera0645 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera0645;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera0645 && ($this->initializera0645->__invoke($valueHolderf9e8c, $this, 'initializeProxy', array(), $this->initializera0645) || 1) && $this->valueHolderf9e8c = $valueHolderf9e8c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf9e8c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf9e8c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
