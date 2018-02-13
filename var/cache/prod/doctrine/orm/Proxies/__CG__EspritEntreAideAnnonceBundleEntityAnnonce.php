<?php

namespace Proxies\__CG__\EspritEntreAide\AnnonceBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Annonce extends \EspritEntreAide\AnnonceBundle\Entity\Annonce implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'id', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'titreA', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'descA', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'dateA', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'categorieA', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'idUser', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'numTel', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'idRep', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'dateModif', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'documents'];
        }

        return ['__isInitialized__', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'id', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'titreA', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'descA', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'dateA', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'categorieA', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'idUser', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'numTel', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'idRep', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'dateModif', '' . "\0" . 'EspritEntreAide\\AnnonceBundle\\Entity\\Annonce' . "\0" . 'documents'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Annonce $proxy) {
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
    public function getDocuments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocuments', []);

        return parent::getDocuments();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocuments($documents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocuments', [$documents]);

        return parent::setDocuments($documents);
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
    public function setTitreA($titreA)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitreA', [$titreA]);

        return parent::setTitreA($titreA);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitreA()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitreA', []);

        return parent::getTitreA();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescA($descA)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescA', [$descA]);

        return parent::setDescA($descA);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescA()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescA', []);

        return parent::getDescA();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateA($dateA)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateA', [$dateA]);

        return parent::setDateA($dateA);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorieA()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorieA', []);

        return parent::getCategorieA();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorieA($categorieA)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorieA', [$categorieA]);

        return parent::setCategorieA($categorieA);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateA()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateA', []);

        return parent::getDateA();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumTel($numTel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumTel', [$numTel]);

        return parent::setNumTel($numTel);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumTel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumTel', []);

        return parent::getNumTel();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUser', []);

        return parent::getIdUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUser($idUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUser', [$idUser]);

        return parent::setIdUser($idUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdRep()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdRep', []);

        return parent::getIdRep();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdRep($idRep)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdRep', [$idRep]);

        return parent::setIdRep($idRep);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModif($dateModif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModif', [$dateModif]);

        return parent::setDateModif($dateModif);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModif', []);

        return parent::getDateModif();
    }

}
