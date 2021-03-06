<?php

namespace site\reservationBundle\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="site\reservationBundle\Entity\EventsRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Events
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

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
     * @var integer
     *
     * @ORM\Column(name="available", type="integer", nullable=false)
     */
    private $available;

     /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", nullable=false,columnDefinition="ENUM('travel', 'tourism', 'shopping', 'restaurant', 'hotels')")
     */
    private $category;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer", nullable=false)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="ispublished", type="string", nullable=true,columnDefinition="ENUM('true', 'false','TRUE','True','False','FALSE')")
     */
    private $ispublished;

     /**
     * @var string
     *
     * @ORM\Column(name="isdeleted", type="string", nullable=true,columnDefinition="ENUM('0', '1')")
     */
    private $isdeleted;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", nullable=false)
     */
    private $image;

    private $temp;


    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (isset($this->image)) {
            // store the old name to delete after the update
            $this->temp = $this->image;
            $this->image = null;
        } else {
            $this->image = 'initial';
        }
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            // do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            $this->image = $filename.'.'.$this->getFile()->guessExtension();
        }
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getFile()->move($this->getUploadRootDir(), $this->image);

        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->temp);
            // clear the temp image path
            $this->temp = null;
        }
        $this->file = null;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }


    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255, nullable=false)
     */
    private $place;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Events
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set datefrom
     *
     * @param \DateTime $datefrom
     * @return Events
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
     * @return Events
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
     * Set available
     *
     * @param integer $available
     * @return Events
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    
        return $this;
    }

    /**
     * Get available
     *
     * @return integer 
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Events
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
     * Set rating
     *
     * @param integer $rating
     * @return Events
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
     * Set ispublished
     *
     * @param string $ispublished
     * @return Events
     */
    public function setIspublished($ispublished)
    {
        $this->ispublished = $ispublished;
    
        return $this;
    }

    /**
     * Get ispublished
     *
     * @return string 
     */
    public function getIspublished()
    {
        return $this->ispublished;
    }

    /**
     * Set isdeleted
     *
     * @param string $isdeleted
     * @return Events
     */
    public function setIsdeleted($isdeleted)
    {
        $this->isdeleted = $isdeleted;
    
        return $this;
    }

    /**
     * Get isdeleted
     *
     * @return string 
     */
    public function getIsdeleted()
    {
        return $this->isdeleted;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Events
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return Events
     */
    public function setPlace($place)
    {
        $this->place = $place;
    
        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set comp
     *
     * @param \site\reservationBundle\Entity\Customer $comp
     * @return Events
     */
    public function setComp(\site\reservationBundle\Entity\Customer $comp = null)
    {
        $this->comp = $comp;
    
        return $this;
    }

    /**
     * Get comp
     *
     * @return \site\reservationBundle\Entity\ICustomer 
     */
    public function getComp()
    {
        return $this->comp;
    }
public function getAbsolutePath()
    {
        return null === $this->image
            ? null
            : $this->getUploadRootDir().'/'.$this->image;
    }

    public function getWebPath()
    {
        return null === $this->image
            ? null
            : $this->getUploadDir().'/'.$this->image;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/documents';
    }
    
}
