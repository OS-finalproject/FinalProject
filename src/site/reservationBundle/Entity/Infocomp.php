<?php

namespace site\reservationBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Infocomp
 *
 * @ORM\Table(name="infocomp")
 * @ORM\Entity(repositoryClass="site\reservationBundle\Entity\InfocompRepository")
 */
class Infocomp
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
     * @ORM\Column(name="website", type="text", nullable=false)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", nullable=false,columnDefinition="ENUM('travel', 'tourism', 'shopping', 'restaurant', 'hotels')")
     */
    private $category;

    /**
     * @var \Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="custid", referencedColumnName="id",onDelete="cascade")
     * })
     */
    private $custid;
    
   /**
     * @var integer
     *
     * @ORM\Column(name="is_active", type="integer", nullable=false,options={"default"=0})
     */
    private $is_active;



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
     * Set website
     *
     * @param string $website
     * @return Infocomp
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Infocomp
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
     * Set is_active
     *
     * @param integer $is_active
     * @return Infocomp
     */
    public function setIs_active($is_active)
    {
        $this->is_active = $is_active;
    
        return $this;
    }

    /**
     * Get  is_active
     *
     * @return integer 
     */
    public function getIs_active()
    {
        return $this->is_active;
    }

    /**
     * Set custid
     *
     * @param \site\reservationBundle\Entity\Customer $custid
     * @return Infocomp
     */
    public function setCustid(\site\reservationBundle\Entity\Customer $custid = null)
    {
        $this->custid = $custid;
    
        return $this;
    }

    /**
     * Get custid
     *
     * @return \site\reservationBundle\Entity\Customer 
     */
    public function getCustid()
    {
        return $this->custid;
    }
}