<?php

namespace ContainerQaxF1Yx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbb15f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere8f06 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0607a = [
        
    ];

    public function getConnection()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'getConnection', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'getMetadataFactory', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'getExpressionBuilder', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'beginTransaction', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'getCache', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->getCache();
    }

    public function transactional($func)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'transactional', array('func' => $func), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->transactional($func);
    }

    public function commit()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'commit', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->commit();
    }

    public function rollback()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'rollback', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'getClassMetadata', array('className' => $className), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'createQuery', array('dql' => $dql), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'createNamedQuery', array('name' => $name), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'createQueryBuilder', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'flush', array('entity' => $entity), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'clear', array('entityName' => $entityName), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->clear($entityName);
    }

    public function close()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'close', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->close();
    }

    public function persist($entity)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'persist', array('entity' => $entity), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'remove', array('entity' => $entity), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'refresh', array('entity' => $entity), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'detach', array('entity' => $entity), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'merge', array('entity' => $entity), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'getRepository', array('entityName' => $entityName), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'contains', array('entity' => $entity), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'getEventManager', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'getConfiguration', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'isOpen', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'getUnitOfWork', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'getProxyFactory', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'initializeObject', array('obj' => $obj), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'getFilters', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'isFiltersStateClean', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'hasFilters', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return $this->valueHolderbb15f->hasFilters();
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

        $instance->initializere8f06 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbb15f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbb15f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbb15f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, '__get', ['name' => $name], $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        if (isset(self::$publicProperties0607a[$name])) {
            return $this->valueHolderbb15f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb15f;

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

        $targetObject = $this->valueHolderbb15f;
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
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb15f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbb15f;
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
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, '__isset', array('name' => $name), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb15f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbb15f;
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
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, '__unset', array('name' => $name), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb15f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbb15f;
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
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, '__clone', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        $this->valueHolderbb15f = clone $this->valueHolderbb15f;
    }

    public function __sleep()
    {
        $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, '__sleep', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;

        return array('valueHolderbb15f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere8f06 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere8f06;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere8f06 && ($this->initializere8f06->__invoke($valueHolderbb15f, $this, 'initializeProxy', array(), $this->initializere8f06) || 1) && $this->valueHolderbb15f = $valueHolderbb15f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbb15f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbb15f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
