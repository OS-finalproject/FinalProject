<?php

namespace site\reservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendar
 *
 * @ORM\Table(name="calendar")
 * @ORM\Entity(repositoryClass="site\reservationBundle\Entity\CalendarRepository")
 */
class Calendar
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
     * @ORM\Column(name="datefrom", type="datetime", nullable=false)
     */
    private $datefrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateto", type="datetime", nullable=false)
     */
    private $dateto;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", nullable=false,columnDefinition="ENUM('travel', 'tourism', 'shopping', 'restaurant', 'hotels')")
     */
    private $category;

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
     * Set datefrom
     *
     * @param \DateTime $datefrom
     * @return Calendar
     */
    public function setDatefrom($datefrom)
    {
        $this->datefrom = $datefrom;
    
        return $this;
    }

    /**
     * Get datefrom
     *
     * @return \DateTime 
     */
    public function getDatefrom()
    {
        return $this->datefrom;
    }

    /**
     * Set dateto
     *
     * @param \DateTime $dateto
     * @return Calendar
     */
    public function setDateto($dateto)
    {
        $this->dateto = $dateto;
    
        return $this;
    }

    /**
     * Get dateto
     *
     * @return \DateTime 
     */
    public function getDateto()
    {
        return $this->dateto;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Calendar
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set user
     *
     * @param \site\reservationBundle\Entity\Userinfo $user
     * @return Calendar
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