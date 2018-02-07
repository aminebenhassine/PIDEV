<?php

namespace EspritEntreAide\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="EspritEntreAide\StoreBundle\Repository\DocumentRepository")
 */
class Document
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_doc", type="string", length=255, nullable=true)
     */
    private $nomDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255, nullable=true)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_doc", type="string", length=255, nullable=true)
     */
    private $etatDoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upload", type="date", nullable=true)
     */
    private $dateUpload;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomDoc
     *
     * @param string $nomDoc
     *
     * @return Document
     */
    public function setNomDoc($nomDoc)
    {
        $this->nomDoc = $nomDoc;

        return $this;
    }

    /**
     * Get nomDoc
     *
     * @return string
     */
    public function getNomDoc()
    {
        return $this->nomDoc;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Document
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set etatDoc
     *
     * @param string $etatDoc
     *
     * @return Document
     */
    public function setEtatDoc($etatDoc)
    {
        $this->etatDoc = $etatDoc;

        return $this;
    }

    /**
     * Get etatDoc
     *
     * @return string
     */
    public function getEtatDoc()
    {
        return $this->etatDoc;
    }

    /**
     * Set dateUpload
     *
     * @param \DateTime $dateUpload
     *
     * @return Document
     */
    public function setDateUpload($dateUpload)
    {
        $this->dateUpload = $dateUpload;

        return $this;
    }

    /**
     * Get dateUpload
     *
     * @return \DateTime
     */
    public function getDateUpload()
    {
        return $this->dateUpload;
    }
}

