<?php

namespace site\reservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userevent
 *
 * @ORM\Table(name="userevent")
 * @ORM\Entity(repositoryClass="site\reservationBundle\Entity\UsereventRepository")
 */
class Userevent
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
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer", nullable=false)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="evalstate", type="string", length=255, nullable=false)
     */
    private $evalstate;

    /**
     * @var \Events
     *
     * @ORM\ManyToOne(targetEntity="Events")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_id", referencedColumnName="id",onDelete="cascade")
     * })
     */
    private $event;

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
     * Set rating
     *
     * @param integer $rating
     * @return Userevent
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    
        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set evalstate
     *
     * @param string $evalstate
     * @return Userevent
     */
    public function setEvalstate($evalstate)
    {
        $this->evalstate = $evalstate;
    
        return $this;
    }

    /**
     * Get evalstate
     *
     * @return string 
     */
    public function getEvalstate()
    {
        return $this->evalstate;
    }

    /**
     * Set event
     *
     * @param \site\reservationBundle\Entity\Events $event
     * @return Userevent
     */
    public function setEvent(\site\reservationBundle\Entity\Events $event = null)
    {
        $this->event = $event;
    
        return $this;
    }

    /**
     * Get event
     *
     * @return \site\reservationBundle\Entity\Events 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set user
     *
     * @param \site\reservationBundle\Entity\Userinfo $user
     * @return Userevent
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