<?php

namespace EspritEntreAide\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity(repositoryClass="EspritEntreAide\AnnonceBundle\Repository\ReponseRepository")
 */
class Reponse
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
     * @var int
     * @ORM\ManyToOne(targetEntity="EspritEntreAide\UserBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id")
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="EspritEntreAide\AnnonceBundle\Entity\Annonce")
     * @ORM\JoinColumn(referencedColumnName="id")
     * @ORM\Column(name="id_annonce", type="integer", nullable=true)
     */
    private $idAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=true)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modif", type="date", nullable=true)
     */
    private $dateModif;


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
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Reponse
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idAnnonce
     *
     * @param integer $idAnnonce
     *
     * @return Reponse
     */
    public function setIdAnnonce($idAnnonce)
    {
        $this->idAnnonce = $idAnnonce;

        return $this;
    }

    /**
     * Get idAnnonce
     *
     * @return int
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Reponse
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Reponse
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateModif
     *
     * @param \DateTime $dateModif
     *
     * @return Reponse
     */
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * Get dateModif
     *
     * @return \DateTime
     */
    public function getDateModif()
    {
        return $this->dateModif;
    }
}

