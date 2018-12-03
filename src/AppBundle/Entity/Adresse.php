<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table(name="adresse")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdresseRepository")
 */
class Adresse
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
     *
     * @ORM\Column(name="numeroAdresse", type="integer", nullable=true)
     */
    private $numeroAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="complementNumeroAdresse", type="string", length=5, nullable=true)
     */
    private $complementNumeroAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="voie", type="string", length=50)
     */
    private $voie;

    /**
     * @var string
     *
     * @ORM\Column(name="intituleAdresse", type="string", length=255)
     */
    private $intituleAdresse;

    /**
     * @var int
     *
     * @ORM\Column(name="codePostaleAdresse", type="integer")
     */
    private $codePostaleAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="VilleAdresse", type="string", length=255)
     */
    private $villeAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="PaysAdresse", type="string", length=255)
     */
    private $paysAdresse;


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
     * Set numeroAdresse
     *
     * @param integer $numeroAdresse
     *
     * @return Adresse
     */
    public function setNumeroAdresse($numeroAdresse)
    {
        $this->numeroAdresse = $numeroAdresse;

        return $this;
    }

    /**
     * Get numeroAdresse
     *
     * @return int
     */
    public function getNumeroAdresse()
    {
        return $this->numeroAdresse;
    }

    /**
     * Set complementNumeroAdresse
     *
     * @param string $complementNumeroAdresse
     *
     * @return Adresse
     */
    public function setComplementNumeroAdresse($complementNumeroAdresse)
    {
        $this->complementNumeroAdresse = $complementNumeroAdresse;

        return $this;
    }

    /**
     * Get complementNumeroAdresse
     *
     * @return string
     */
    public function getComplementNumeroAdresse()
    {
        return $this->complementNumeroAdresse;
    }

    /**
     * Set voie
     *
     * @param string $voie
     *
     * @return Adresse
     */
    public function setVoie($voie)
    {
        $this->voie = $voie;

        return $this;
    }

    /**
     * Get voie
     *
     * @return string
     */
    public function getVoie()
    {
        return $this->voie;
    }

    /**
     * Set intituleAdresse
     *
     * @param string $intituleAdresse
     *
     * @return Adresse
     */
    public function setIntituleAdresse($intituleAdresse)
    {
        $this->intituleAdresse = $intituleAdresse;

        return $this;
    }

    /**
     * Get intituleAdresse
     *
     * @return string
     */
    public function getIntituleAdresse()
    {
        return $this->intituleAdresse;
    }

    /**
     * Set codePostaleAdresse
     *
     * @param integer $codePostaleAdresse
     *
     * @return Adresse
     */
    public function setCodePostaleAdresse($codePostaleAdresse)
    {
        $this->codePostaleAdresse = $codePostaleAdresse;

        return $this;
    }

    /**
     * Get codePostaleAdresse
     *
     * @return int
     */
    public function getCodePostaleAdresse()
    {
        return $this->codePostaleAdresse;
    }

    /**
     * Set villeAdresse
     *
     * @param string $villeAdresse
     *
     * @return Adresse
     */
    public function setVilleAdresse($villeAdresse)
    {
        $this->villeAdresse = $villeAdresse;

        return $this;
    }

    /**
     * Get villeAdresse
     *
     * @return string
     */
    public function getVilleAdresse()
    {
        return $this->villeAdresse;
    }

    /**
     * Set paysAdresse
     *
     * @param string $paysAdresse
     *
     * @return Adresse
     */
    public function setPaysAdresse($paysAdresse)
    {
        $this->paysAdresse = $paysAdresse;

        return $this;
    }

    /**
     * Get paysAdresse
     *
     * @return string
     */
    public function getPaysAdresse()
    {
        return $this->paysAdresse;
    }
}

