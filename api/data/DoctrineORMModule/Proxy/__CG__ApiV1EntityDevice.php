<?php

namespace DoctrineORMModule\Proxy\__CG__\Api\V1\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Device extends \Api\V1\Entity\Device implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function getToken()
    {
        $this->__load();
        return parent::getToken();
    }

    public function setToken($token)
    {
        $this->__load();
        return parent::setToken($token);
    }

    public function getModel()
    {
        $this->__load();
        return parent::getModel();
    }

    public function setModel($model)
    {
        $this->__load();
        return parent::setModel($model);
    }

    public function getDisplayName()
    {
        $this->__load();
        return parent::getDisplayName();
    }

    public function setDisplayName($displayName)
    {
        $this->__load();
        return parent::setDisplayName($displayName);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getFlags()
    {
        $this->__load();
        return parent::getFlags();
    }

    public function setFlags($flags)
    {
        $this->__load();
        return parent::setFlags($flags);
    }

    public function getResourceId()
    {
        $this->__load();
        return parent::getResourceId();
    }

    public function isDeleted()
    {
        $this->__load();
        return parent::isDeleted();
    }

    public function setDeleted($deleted)
    {
        $this->__load();
        return parent::setDeleted($deleted);
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function getModified()
    {
        $this->__load();
        return parent::getModified();
    }

    public function setModified($modified)
    {
        $this->__load();
        return parent::setModified($modified);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'token', 'model', 'displayName', 'name', 'flags', 'deleted', 'created', 'modified');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}