<?php

namespace site\reservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hobbies
 *
 * @ORM\Table(name="hobbies")
 * @ORM\Entity(repositoryClass="site\reservationBundle\Entity\HobbiesRepository")
 */
class Hobbies
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
     * @var string
     *
     * @ORM\Column(name="hobby", type="array", nullable=false)
     */
    private $hobby;

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
     * Set hobby
     *
     * @param string $hobby
     * @return Hobbies
     */
    public function setHobby($hobby)
    {
        $this->hobby = $hobby;
    
        return $this;
    }

    /**
     * Get hobby
     *
     * @return string 
     */
    public function getHobby()
    {
        return $this->hobby;
    }

    /**
     * Set user
     *
     * @param \site\reservationBundle\Entity\Customer $user
     * @return Hobbies
     */
    public function setUser(\site\reservationBundle\Entity\Customer $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \site\reservationBundle\Entity\Customer 
     */
    public function getUser()
    {
        return $this->user;
    }
}
