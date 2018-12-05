<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Adresse", cascade={"persist"})
     */
    private $adresses;

    public function __construct()
    {
        parent::__construct();
        $this->adresses = new ArrayCollection();
    }

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
     * Add adresse
     *
     * @param \AppBundle\Entity\Adresse $adress
     *
     * @return User
     */
    public function addAdresse(Adresse $adresse)
    {
        $this->adresses[] = $adresse;

        return $this;
    }

    /**
     * Remove adresse
     *
     * @param \AppBundle\Entity\Adresse $adress
     */
    public function removeAdresse(Adresse $adresse)
    {
        $this->adresses->removeElement($adresse);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresses()
    {
        return $this->adresses;
    }

    public function uniqueAdresse() {
        return $this->adresses[0];
    }
}
