<?php

namespace site\reservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendar
 *
 * @ORM\Table(name="calendar")
 * @ORM\Entity(repositoryClass="site\reservationBundle\Entity\CalendarRepository")
 */
class Calendar {

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
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     */
    private $city;

    /**
     * @var \Customer
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
    public function getId() {
        return $this->id;
    }

    /**
     * Set datefrom
     *
     * @param \DateTime $datefrom
     * @return Calendar
     */
    public function setDatefrom($datefrom) {
        $this->datefrom = $datefrom;

        return $this;
    }

    /**
     * Get datefrom
     *
     * @return \DateTime 
     */
    public function getDatefrom() {
        return $this->datefrom;
    }

    /**
     * Set dateto
     *
     * @param \DateTime $dateto
     * @return Calendar
     */
    public function setDateto($dateto) {
        $this->dateto = $dateto;

        return $this;
    }

    /**
     * Get dateto
     *
     * @return \DateTime 
     */
    public function getDateto() {
        return $this->dateto;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Calendar
     */
    public function setCategory($category) {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Set user
     *
     * @param \site\reservationBundle\Entity\Customer $user
     * @return Calendar
     */
    public function setUser(\site\reservationBundle\Entity\Customer $user = null) {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return \site\reservationBundle\Entity\Customer
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Calendar
     */
    public function setCountry($country) {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Calendar
     */
    public function setCity($city) {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity() {
        return $this->city;
    }

}