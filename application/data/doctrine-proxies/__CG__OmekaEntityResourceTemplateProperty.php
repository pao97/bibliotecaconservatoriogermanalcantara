<?php

namespace DoctrineProxies\__CG__\Omeka\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ResourceTemplateProperty extends \Omeka\Entity\ResourceTemplateProperty implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'resourceTemplate', 'property', 'alternateLabel', 'alternateComment', 'position', 'dataType', 'isRequired', 'isPrivate', 'defaultLang'];
        }

        return ['__isInitialized__', 'id', 'resourceTemplate', 'property', 'alternateLabel', 'alternateComment', 'position', 'dataType', 'isRequired', 'isPrivate', 'defaultLang'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ResourceTemplateProperty $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setResourceTemplate(\Omeka\Entity\ResourceTemplate $resourceTemplate = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResourceTemplate', [$resourceTemplate]);

        return parent::setResourceTemplate($resourceTemplate);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceTemplate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceTemplate', []);

        return parent::getResourceTemplate();
    }

    /**
     * {@inheritDoc}
     */
    public function setProperty(\Omeka\Entity\Property $property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProperty', [$property]);

        return parent::setProperty($property);
    }

    /**
     * {@inheritDoc}
     */
    public function getProperty()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProperty', []);

        return parent::getProperty();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlternateLabel($alternateLabel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlternateLabel', [$alternateLabel]);

        return parent::setAlternateLabel($alternateLabel);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlternateLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlternateLabel', []);

        return parent::getAlternateLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlternateComment($alternateComment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlternateComment', [$alternateComment]);

        return parent::setAlternateComment($alternateComment);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlternateComment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlternateComment', []);

        return parent::getAlternateComment();
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function setDataType(array $dataType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataType', [$dataType]);

        return parent::setDataType($dataType);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataType', []);

        return parent::getDataType();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsRequired($isRequired)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsRequired', [$isRequired]);

        return parent::setIsRequired($isRequired);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsRequired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsRequired', []);

        return parent::getIsRequired();
    }

    /**
     * {@inheritDoc}
     */
    public function isRequired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRequired', []);

        return parent::isRequired();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPrivate($isPrivate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPrivate', [$isPrivate]);

        return parent::setIsPrivate($isPrivate);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPrivate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPrivate', []);

        return parent::getIsPrivate();
    }

    /**
     * {@inheritDoc}
     */
    public function isPrivate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPrivate', []);

        return parent::isPrivate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultLang($defaultLang)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultLang', [$defaultLang]);

        return parent::setDefaultLang($defaultLang);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultLang()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultLang', []);

        return parent::getDefaultLang();
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceId', []);

        return parent::getResourceId();
    }

}
