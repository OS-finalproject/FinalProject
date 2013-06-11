<?php

namespace site\reservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages")
 * @ORM\Entity(repositoryClass="site\reservationBundle\Entity\MessagesRepository")
 */
class Messages
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
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var \Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="msgfrom", referencedColumnName="id",onDelete="cascade")
     * })
     */
    private $msgfrom;
    /**
     * @var \Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({ 
     *   @ORM\JoinColumn(name="msgto", referencedColumnName="id",onDelete="cascade")
     * })
     */
    private $msgto;



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
     * Set message
     *
     * @param string $message
     * @return Messages
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    

    /**
     * Set to
     *
     * @param \site\reservationBundle\Entity\Customer $msgto
     * @return Messages
     */
    public function setMsgto(\site\reservationBundle\Entity\Customer $msgto = null)
    {
        $this->msgto = $msgto;
    
        return $this;
    }

    /**
     * Get to
     *
     * @return \site\reservationBundle\Entity\Customer 
     */
    public function getMsgto()
    {
        return $this->msgto;
    }

    /**
     * Set from
     *
     * @param \site\reservationBundle\Entity\Customer $msgfrom
     * @return Messages
     */
    public function setMsgfrom(\site\reservationBundle\Entity\Customer $msgfrom = null)
    {
        $this->msgfrom = $msgfrom;
    
        return $this;
    }

    /**
     * Get from
     *
     * @return \site\reservationBundle\Entity\Customer 
     */
    public function getMsgfrom()
    {
        return $this->msgfrom;
    }
}