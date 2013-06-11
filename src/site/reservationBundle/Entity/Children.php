<?php

namespace site\reservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Children
 *
 * @ORM\Table(name="children")
 * @ORM\Entity(repositoryClass="site\reservationBundle\Entity\ChildrenRepository")
 */
class Children
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="datetime", nullable=false)
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="gendar", type="string", nullable=false,columnDefinition="ENUM('male', 'female')")
     */
    private $gendar;

    /**
     * @var \Userinfo
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id",onDelete="cascade")
     * })
     */
    private $user;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return Children
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    
        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set gendar
     *
     * @param string $gendar
     * @return Children
     */
    public function setGendar($gendar)
    {
        $this->gendar = $gendar;
    
        return $this;
    }

    /**
     * Get gendar
     *
     * @return string 
     */
    public function getGendar()
    {
        return $this->gendar;
    }

    /**
     * Set user
     *
     * @param \site\reservationBundle\Entity\Userinfo $user
     * @return Children
     */
    public function setUser(\site\reservationBundle\Entity\Userinfo $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \site\reservationBundle\Entity\Userinfo 
     */
    public function getUser()
    {
        return $this->user;
    }
}