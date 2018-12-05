<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * EmailInterested
 *
 * @ORM\Table(name="email_interested")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmailInterestedRepository")
 * @UniqueEntity("emailInterested")
 */
class EmailInterested
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
     * @ORM\Column(name="emailInterested", type="string", length=255, unique=true)
     * @Assert\Email
     *
     */
    private $emailInterested;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInterested", type="datetime")
     */
    private $dateInterested;

    public function __construct()
    {
        $this->dateInterested = new \DateTime();
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
     * Set emailInterested
     *
     * @param string $emailInterested
     *
     * @return EmailInterested
     */
    public function setEmailInterested($emailInterested)
    {
        $this->emailInterested = $emailInterested;

        return $this;
    }

    /**
     * Get emailInterested
     *
     * @return string
     */
    public function getEmailInterested()
    {
        return $this->emailInterested;
    }

    /**
     * Set dateInterested
     *
     * @param \DateTime $dateInterested
     *
     * @return EmailInterested
     */
    public function setDateInterested($dateInterested)
    {
        $this->dateInterested = $dateInterested;

        return $this;
    }

    /**
     * Get dateInterested
     *
     * @return \DateTime
     */
    public function getDateInterested()
    {
        return $this->dateInterested;
    }
}

