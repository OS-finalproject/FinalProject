<?php

namespace site\reservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="site\reservationBundle\Entity\AddressRepository")
 */
class Address
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
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     */
    private $city;
    /**
     * @var string
     *
     * @ORM\Column(name="att", type="string", length=255, nullable=false)
     */
    private $att;
    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=255, nullable=false)
     */
    private $lang;
    

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="text", nullable=false)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=false)
     */
    private $telephone;

    /**
     * @var \Infocomp
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comp_id", referencedColumnName="id",onDelete="cascade")
     * })
     */
    private $comp;

      /**
     * @var string
     *
     * @ORM\Column(name="head", type="string", nullable=false,columnDefinition="ENUM('no', 'yes')")
     */
    private $head;

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
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
    
        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Address
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
     /**
     * Set head
     *
     * @param string $head
     * @return string
     */
    public function setHead($head)
    {
        $this->head = $head;
    
        return $this;
    }

    /**
     * Get head
     *
     * @return string 
     */
    public function getHead()
    {
        return $this->telephone;
    }
    
    /**
     * Set lang
     *
     * @param string $lang
     * @return string
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    
        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }
    /**
     * Set att
     *
     * @param string $att
     * @return string
     */
    public function setAtt($att)
    {
        $this->att = $att;
    
        return $this;
    }

    /**
     * Get att
     *
     * @return string 
     */
    public function getAtt()
    {
        return $this->att;
    }

    /**
     * Set comp
     *
     * @param \site\reservationBundle\Entity\Infocomp $comp
     * @return Address
     */
    public function setComp(\site\reservationBundle\Entity\Infocomp $comp = null)
    {
        $this->comp = $comp;
    
        return $this;
    }

    /**
     * Get comp
     *
     * @return \site\reservationBundle\Entity\Infocomp 
     */
    public function getComp()
    {
        return $this->comp;
    }
}