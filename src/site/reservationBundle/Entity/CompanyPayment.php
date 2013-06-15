<?php
namespace site\reservationBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyPayment
 *
 * @ORM\Table(name="CompanyPayment")
 * @ORM\Entity(repositoryClass="site\reservationBundle\Entity\CompanyPaymentRepository")
 */
class CompanyPayment {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="companyId", referencedColumnName="id",onDelete="cascade")
     * })
     * 
     */
    private $companyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="payment", type="integer", nullable=false)
     */
    private $payment;

    /**
     * @var \Date
     *
     * @ORM\Column(name="paymentTime", type="date", nullable=false )
     */
    private $paymentTime;


    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId(){
        
        return $this->id;
    }

    /**
     * Set payment
     *
     * @param integer $payment
     * @return CompanyPayment
     */
    public function setPayment($payment){
        
        
        $this->payment = $payment;
    
        return $this;
    }

    /**
     * Get payment
     *
     * @return integer 
     */
    public function getPayment(){
        
        return $this->payment;
    }
    
    

    /**
     * Set paymentTime
     *
     * @param  \Date $paymentTime
     * @return CompanyPayment
     */
    public function setPaymentTime($paymentTime){
        
        $this->paymentTime = $paymentTime;
    
        return $this;
    }

    /**
     * Get paymentTime
     *
     * @return \Date 
     */
    public function getPaymentTime(){
        
        return $this->paymentTime;
    }
    
    
    /**
     * Set companyId
     *
     * @param \site\reservationBundle\Entity\Customer $companyId
     * @return CompanyPayment
     */
    public function setCompanyId(\site\reservationBundle\Entity\Customer $companyId = null)
    {
        $this->companyId = $companyId;
    
        return $this;
    }

    /**
     * Get companyId
     *
     * @return \site\reservationBundle\Entity\Customer 
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }
    
}
    
    
?>
