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
     * @ORM\Column(name="hobby", type="string", nullable=false,columnDefinition="ENUM('travel', 'shopping','reading','music','sports','drawing')")
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
     * @param \site\reservationBundle\Entity\Userinfo $user
     * @return Hobbies
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
