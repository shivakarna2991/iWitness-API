<?php

namespace DoctrineORMModule\Proxy\__CG__\Api\V1\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class UserDevice extends \Api\V1\Entity\UserDevice implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getUserId()
    {
        $this->__load();
        return parent::getUserId();
    }

    public function getDeviceId()
    {
        $this->__load();
        return parent::getDeviceId();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function setUser(\Api\V1\Entity\User $user = NULL)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getDevice()
    {
        $this->__load();
        return parent::getDevice();
    }

    public function setDevice(\Api\V1\Entity\Device $device = NULL)
    {
        $this->__load();
        return parent::setDevice($device);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'userId', 'deviceId', 'user', 'device');
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