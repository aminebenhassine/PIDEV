<?php

namespace EspritEntreAide\EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="EspritEntreAide\EvenementBundle\Repository\EvenementRepository")
 */
class Evenement
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
     * @ORM\Column(name="titre_e", type="string", length=255, nullable=true)
     */
    private $titreE;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_e", type="text", nullable=true)
     */
    private $descE;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_e", type="date", nullable=true)
     */
    private $dateE;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=true)
     */
    private $categorie;

    /**
     * @var int
     * @ORM\OneToOne(targetEntity="EspritEntreAide\UserBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id")
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var int
     * @ORM\OneToOne(targetEntity="EspritEntreAide\ClubBundle\Entity\Club")
     * @ORM\JoinColumn(referencedColumnName="id")
     * @ORM\Column(name="id_club", type="integer", nullable=true)
     */
    private $idClub;

    /**
     * @var string
     *
     * @ORM\Column(name="type_e", type="string", length=255, nullable=true)
     */
    private $typeE;

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
     * Set titreE
     *
     * @param string $titreE
     *
     * @return Evenement
     */
    public function setTitreE($titreE)
    {
        $this->titreE = $titreE;

        return $this;
    }

    /**
     * Get titreE
     *
     * @return string
     */
    public function getTitreE()
    {
        return $this->titreE;
    }

    /**
     * Set descE
     *
     * @param string $descE
     *
     * @return Evenement
     */
    public function setDescE($descE)
    {
        $this->descE = $descE;

        return $this;
    }

    /**
     * Get descE
     *
     * @return string
     */
    public function getDescE()
    {
        return $this->descE;
    }

    /**
     * Set dateE
     *
     * @param \DateTime $dateE
     *
     * @return Evenement
     */
    public function setDateE($dateE)
    {
        $this->dateE = $dateE;

        return $this;
    }

    /**
     * Get dateE
     *
     * @return \DateTime
     */
    public function getDateE()
    {
        return $this->dateE;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Evenement
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Evenement
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
     * Set idClub
     *
     * @param integer $idClub
     *
     * @return Evenement
     */
    public function setIdClub($idClub)
    {
        $this->idClub = $idClub;

        return $this;
    }

    /**
     * Get idClub
     *
     * @return int
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * Set typeE
     *
     * @param string $typeE
     *
     * @return Evenement
     */
    public function setTypeE($typeE)
    {
        $this->typeE = $typeE;

        return $this;
    }

    /**
     * Get typeE
     *
     * @return string
     */
    public function getTypeE()
    {
        return $this->typeE;
    }

    /**
     * Set dateModif
     *
     * @param \DateTime $dateModif
     *
     * @return Evenement
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

