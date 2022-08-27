<?php

namespace ContainerG0OV6wm;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera07ed = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf8f23 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa2e61 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'getConnection', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'getMetadataFactory', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'getExpressionBuilder', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'beginTransaction', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'getCache', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'transactional', array('func' => $func), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'commit', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->commit();
    }

    public function rollback()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'rollback', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'getClassMetadata', array('className' => $className), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'createQuery', array('dql' => $dql), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'createNamedQuery', array('name' => $name), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'createQueryBuilder', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'flush', array('entity' => $entity), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'clear', array('entityName' => $entityName), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->clear($entityName);
    }

    public function close()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'close', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->close();
    }

    public function persist($entity)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'persist', array('entity' => $entity), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'remove', array('entity' => $entity), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'refresh', array('entity' => $entity), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'detach', array('entity' => $entity), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'merge', array('entity' => $entity), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'contains', array('entity' => $entity), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'getEventManager', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'getConfiguration', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'isOpen', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'getUnitOfWork', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'getProxyFactory', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'initializeObject', array('obj' => $obj), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'getFilters', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'isFiltersStateClean', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'hasFilters', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return $this->valueHoldera07ed->hasFilters();
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

        $instance->initializerf8f23 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera07ed) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera07ed = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera07ed->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, '__get', ['name' => $name], $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        if (isset(self::$publicPropertiesa2e61[$name])) {
            return $this->valueHoldera07ed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera07ed;

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

        $targetObject = $this->valueHoldera07ed;
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
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera07ed;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera07ed;
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
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, '__isset', array('name' => $name), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera07ed;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera07ed;
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
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, '__unset', array('name' => $name), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera07ed;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera07ed;
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
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, '__clone', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        $this->valueHoldera07ed = clone $this->valueHoldera07ed;
    }

    public function __sleep()
    {
        $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, '__sleep', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;

        return array('valueHoldera07ed');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf8f23 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf8f23;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf8f23 && ($this->initializerf8f23->__invoke($valueHoldera07ed, $this, 'initializeProxy', array(), $this->initializerf8f23) || 1) && $this->valueHoldera07ed = $valueHoldera07ed;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera07ed;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera07ed;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
