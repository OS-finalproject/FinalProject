<?php

namespace site\reservationBundle\Entity;
//use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Userinfo
 *
 * @ORM\Table(name="userinfo")
 * @ORM\Entity(repositoryClass="site\reservationBundle\Entity\UserinfoRepository")
 */
class Userinfo
{
    protected $customers;
     //protected $hobbies;
    public function __construct()
    {
        $this->customers = new ArrayCollection();
        //$this->hobbies = new ArrayCollection();
    }
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
     * @ORM\Column(name="address", type="text", nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="text", nullable=false)
     */
    private $mobile;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_children", type="integer", nullable=false)
     */
    private $numChildren;

    /**
     * @var string
     *
     * @ORM\Column(name="gendar", type="string", nullable=false,columnDefinition="ENUM('female', 'male')")
     */
    private $gendar;
    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=false)
     */
    private $telephone;

    /**
     * @var \Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="custid", referencedColumnName="id", onDelete="cascade")
     * })
     */
    private $custid;



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
     * Set address
     *
     * @param string $address
     * @return Userinfo
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Userinfo
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    
        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set numChildren
     *
     * @param integer $numChildren
     * @return Userinfo
     */
    public function setNumChildren($numChildren)
    {
        $this->numChildren = $numChildren;
    
        return $this;
    }

    /**
     * Get numChildren
     *
     * @return integer 
     */
    public function getNumChildren()
    {
        return $this->numChildren;
    }

    /**
     * Set gendar
     *
     * @param string $gendar
     * @return Userinfo
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
     * Set custid
     *
     * @param \site\reservationBundle\Entity\Customer $custid
     * @return Userinfo
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
    public function getCustomers()
    {
        return $this->customers;
    }
    // public function getHobbies()
    // {
    //     return $this->customers;
    // }

    

   /**
     * Set telephone
     *
     * @param string $telephone
     * @return Customer
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    
    
}
