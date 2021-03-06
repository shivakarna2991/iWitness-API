<?php

namespace DoctrineORMModule\Proxy\__CG__\Api\V1\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Subscription extends \Api\V1\Entity\Subscription implements \Doctrine\ORM\Proxy\Proxy
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

    public function getOriginalPhone()
    {
        $this->__load();
        return parent::getOriginalPhone();
    }

    public function setOriginalPhone($originalPhone)
    {
        $this->__load();
        return parent::setOriginalPhone($originalPhone);
    }

    public function getPurchasedToken()
    {
        $this->__load();
        return parent::getPurchasedToken();
    }

    public function setPurchasedToken($purchasedToken)
    {
        $this->__load();
        return parent::setPurchasedToken($purchasedToken);
    }

    public function getProductId()
    {
        $this->__load();
        return parent::getProductId();
    }

    public function setProductId($productId)
    {
        $this->__load();
        return parent::setProductId($productId);
    }

    public function getOriginalPhoneModel()
    {
        $this->__load();
        return parent::getOriginalPhoneModel();
    }

    public function setOriginalPhoneModel($originalPhoneModel)
    {
        $this->__load();
        return parent::setOriginalPhoneModel($originalPhoneModel);
    }

    public function getCustomerIp()
    {
        $this->__load();
        return parent::getCustomerIp();
    }

    public function setCustomerIp($customerIp)
    {
        $this->__load();
        return parent::setCustomerIp($customerIp);
    }

    public function getArbBillingId()
    {
        $this->__load();
        return parent::getArbBillingId();
    }

    public function getReceiptId()
    {
        $this->__load();
        return parent::getReceiptId();
    }

    public function setReceiptId($receiptId)
    {
        $this->__load();
        return parent::setReceiptId($receiptId);
    }
    public function getOriginalReceiptId()
    {
        $this->__load();
        return parent::getOriginalReceiptId();
    }

    public function setOriginalReceiptId($originalreceiptid)
    {
        $this->__load();
        return parent::setOriginalReceiptId($originalreceiptid);
    }

    public function setArbBillingId($arbitraryId)
    {
        $this->__load();
        return parent::setArbBillingId($arbitraryId);
    }

    public function getPlan()
    {
        $this->__load();
        return parent::getPlan();
    }

    public function setPlan($plan)
    {
        $this->__load();
        return parent::setPlan($plan);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getStartAt()
    {
        $this->__load();
        return parent::getStartAt();
    }

    public function setStartAt($startAt)
    {
        $this->__load();
        return parent::setStartAt($startAt);
    }

    public function getExpireAt()
    {
        $this->__load();
        return parent::getExpireAt();
    }

    public function setExpireAt($expireAt)
    {
        $this->__load();
        return parent::setExpireAt($expireAt);
    }

    public function getSuspended()
    {
        $this->__load();
        return parent::getSuspended();
    }

    public function setSuspended($suspended)
    {
        $this->__load();
        return parent::setSuspended($suspended);
    }

    public function getIsActive()
    {
        $this->__load();
        return parent::getIsActive();
    }

    public function setIsActive($isActive)
    {
        $this->__load();
        return parent::setIsActive($isActive);
    }

    public function getCoupon()
    {
        $this->__load();
        return parent::getCoupon();
    }

    public function setCoupon(\Api\V1\Entity\Coupon $coupon = NULL)
    {
        $this->__load();
        return parent::setCoupon($coupon);
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

    public function getAmount()
    {
        $this->__load();
        return parent::getAmount();
    }

    public function setAmount($amount)
    {
        $this->__load();
        return parent::setAmount($amount);
    }

    public function getPaymentGateway()
    {
        $this->__load();
        return parent::getPaymentGateway();
    }

    public function setPaymentGateway($paymentGateway)
    {
        $this->__load();
        return parent::setPaymentGateway($paymentGateway);
    }

    public function getResourceId()
    {
        $this->__load();
        return parent::getResourceId();
    }

    public function extract($object)
    {
        $this->__load();
        return parent::extract($object);
    }

    public function hydrate(array $data, $object)
    {
        $this->__load();
        return parent::hydrate($data, $object);
    }

    public function getStrategy($name)
    {
        $this->__load();
        return parent::getStrategy($name);
    }

    public function hasStrategy($name)
    {
        $this->__load();
        return parent::hasStrategy($name);
    }

    public function addStrategy($name, \Zend\Stdlib\Hydrator\Strategy\StrategyInterface $strategy)
    {
        $this->__load();
        return parent::addStrategy($name, $strategy);
    }

    public function removeStrategy($name)
    {
        $this->__load();
        return parent::removeStrategy($name);
    }

    public function extractValue($name, $value, $object = NULL)
    {
        $this->__load();
        return parent::extractValue($name, $value, $object);
    }

    public function hydrateValue($name, $value, $data = NULL)
    {
        $this->__load();
        return parent::hydrateValue($name, $value, $data);
    }

    public function extractName($name, $object = NULL)
    {
        $this->__load();
        return parent::extractName($name, $object);
    }

    public function hydrateName($name, $data = NULL)
    {
        $this->__load();
        return parent::hydrateName($name, $data);
    }

    public function getFilter()
    {
        $this->__load();
        return parent::getFilter();
    }

    public function addFilter($name, $filter, $condition = 1)
    {
        $this->__load();
        return parent::addFilter($name, $filter, $condition);
    }

    public function hasFilter($name)
    {
        $this->__load();
        return parent::hasFilter($name);
    }

    public function removeFilter($name)
    {
        $this->__load();
        return parent::removeFilter($name);
    }

    public function setNamingStrategy(\Zend\Stdlib\Hydrator\NamingStrategy\NamingStrategyInterface $strategy)
    {
        $this->__load();
        return parent::setNamingStrategy($strategy);
    }

    public function getNamingStrategy()
    {
        $this->__load();
        return parent::getNamingStrategy();
    }

    public function hasNamingStrategy()
    {
        $this->__load();
        return parent::hasNamingStrategy();
    }

    public function removeNamingStrategy()
    {
        $this->__load();
        return parent::removeNamingStrategy();
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
        return array('__isInitialized__', 'id', 'originalPhone', 'originalPhoneModel', 'purchasedToken', 'productId', 'customerIp', 'arbBillingId', 'plan', 'type', 'startAt', 'expireAt', 'receiptId', 'originalreceiptid', 'suspended', 'isActive', 'amount', 'paymentGateway', 'deleted', 'created', 'modified', 'coupon', 'user');
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
