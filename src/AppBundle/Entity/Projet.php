<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjetRepository")
 */
class Projet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomProjet", type="string", length=255)
     */
    private $nomProjet;

    /**
     * @ORM\Column(name="descriptionProjet", type="text")
     */
    private $descriptionProjet;

    /**
     * @ORM\Column(name="imageProjet", type="string", length=255)
     */
    private $imageProjet;

    /**
     * @ORM\Column(name="shortDescriptionProjet", type="string", length=255)
     */
    private $shortDescriptionProjet;


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
     * Set nomProjet
     *
     * @param string $nomProjet
     *
     * @return Projet
     */
    public function setNomProjet($nomProjet)
    {
        $this->nomProjet = $nomProjet;

        return $this;
    }

    /**
     * Get nomProjet
     *
     * @return string
     */
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * Set descriptionProjet
     *
     * @param string $descriptionProjet
     *
     * @return Projet
     */
    public function setDescriptionProjet($descriptionProjet)
    {
        $this->descriptionProjet = $descriptionProjet;

        return $this;
    }

    /**
     * Get descriptionProjet
     *
     * @return string
     */
    public function getDescriptionProjet()
    {
        return $this->descriptionProjet;
    }

    /**
     * Set imageProjet
     *
     * @param string $imageProjet
     *
     * @return Projet
     */
    public function setImageProjet($imageProjet)
    {
        $this->imageProjet = $imageProjet;

        return $this;
    }

    /**
     * Get imageProjet
     *
     * @return string
     */
    public function getImageProjet()
    {
        return $this->imageProjet;
    }

    /**
     *  Get shortDescription
     *
     * @return string
     */
    public function getShortDescriptionProjet() {
        return $this->shortDescriptionProjet;
    }

    /**
     * Set shortDescriptionProjet
     *
     * @param string $shortDescription
     *
     * @return Projet
     */
    public function setShortDescriptionProjet($shortDescription) {
        $this->shortDescriptionProjet = $shortDescription ;

        return $this;
    }

}
