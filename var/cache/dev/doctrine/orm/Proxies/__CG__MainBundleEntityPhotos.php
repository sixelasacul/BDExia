<?php

namespace Proxies\__CG__\MainBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Photos extends \MainBundle\Entity\Photos implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'chemin', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'idImg', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'dateImg', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'auteurImg', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'typeImg', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'likesUser', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'idImgAct', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'idImgProd'];
        }

        return ['__isInitialized__', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'chemin', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'idImg', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'dateImg', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'auteurImg', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'typeImg', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'likesUser', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'idImgAct', '' . "\0" . 'MainBundle\\Entity\\Photos' . "\0" . 'idImgProd'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Photos $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setChemin($chemin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChemin', [$chemin]);

        return parent::setChemin($chemin);
    }

    /**
     * {@inheritDoc}
     */
    public function getChemin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChemin', []);

        return parent::getChemin();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdImg()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdImg();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdImg', []);

        return parent::getIdImg();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateImg(\MainBundle\Entity\Dates $dateImg = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateImg', [$dateImg]);

        return parent::setDateImg($dateImg);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateImg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateImg', []);

        return parent::getDateImg();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuteurImg(\MainBundle\Entity\Users $auteurImg = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuteurImg', [$auteurImg]);

        return parent::setAuteurImg($auteurImg);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuteurImg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuteurImg', []);

        return parent::getAuteurImg();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeImg(\MainBundle\Entity\Types $typeImg = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeImg', [$typeImg]);

        return parent::setTypeImg($typeImg);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeImg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeImg', []);

        return parent::getTypeImg();
    }

    /**
     * {@inheritDoc}
     */
    public function addLikesUser(\MainBundle\Entity\Users $likesUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLikesUser', [$likesUser]);

        return parent::addLikesUser($likesUser);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLikesUser(\MainBundle\Entity\Users $likesUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLikesUser', [$likesUser]);

        return parent::removeLikesUser($likesUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getLikesUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLikesUser', []);

        return parent::getLikesUser();
    }

    /**
     * {@inheritDoc}
     */
    public function addIdImgAct(\MainBundle\Entity\Activites $idImgAct)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIdImgAct', [$idImgAct]);

        return parent::addIdImgAct($idImgAct);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIdImgAct(\MainBundle\Entity\Activites $idImgAct)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIdImgAct', [$idImgAct]);

        return parent::removeIdImgAct($idImgAct);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdImgAct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdImgAct', []);

        return parent::getIdImgAct();
    }

    /**
     * {@inheritDoc}
     */
    public function addIdImgProd(\MainBundle\Entity\Boutique $idImgProd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIdImgProd', [$idImgProd]);

        return parent::addIdImgProd($idImgProd);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIdImgProd(\MainBundle\Entity\Boutique $idImgProd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIdImgProd', [$idImgProd]);

        return parent::removeIdImgProd($idImgProd);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdImgProd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdImgProd', []);

        return parent::getIdImgProd();
    }

}