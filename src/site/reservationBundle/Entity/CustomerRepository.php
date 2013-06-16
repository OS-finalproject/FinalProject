<?php

namespace site\reservationBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CustomerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CustomerRepository extends EntityRepository {

    public function getProfileInfo($custid) {

        $query = $this->getEntityManager()->createQuery('
            
                         SELECT C 
                         from sitereservationBundle:Customer C
                         where C.id= :id
                    ');
        $query->setParameter('id',$custid);
		return $query->getResult();
  
       
    }    
    
    public function getCustomerInfo($email,$pass){
        
        $query = $this->getEntityManager()->createQuery('
            
                select c
                from sitereservationBundle:customer c
                where c.email = :email and c.password = :pass

        ');
        
        $query->setParameter('email', $email);
        $query->setParameter('pass',$pass);
        
        return $query->getResult();
        
    }
    public function getAdmin() {

        $query = $this->getEntityManager()->createQuery('
            
                         SELECT C 
                         from sitereservationBundle:Customer C
                         where C.type like :type
                    ');
        $query->setParameter('type','admin');
        return $query->getSingleResult();
       
       
    }
    public function getCustomerId(){
        
        $query = $this->getEntityManager()->createQuery('
            
                select c
                from sitereservationBundle:Customer c
                order by c.id desc 

        ');
        
        $query->setMaxResults(1);
        
        return $query->getResult();
        
    }
    public function getsearchResult($keyword){
        $query = $this->getEntityManager()->createQuery('
        select c
        from sitereservationBundle:Customer c
        where c.username like :name

        ');

        $query->setParameter("name",'%'.$keyword.'%');

        return $query->getSingleResult();
}

// ------------  admin DQL -- --------////

 public function getUnactiveCompany(){
     
     
     $query = $this->getEntityManager()->createQuery('
         
        select comp 
        from sitereservationBundle:Infocomp comp
        join comp.custid c
        where comp.custid = c.id and comp.is_active = 0 

    ');
     
     return $query->getResult();
     
     
 }

 public function getUnpaymentCompany($paymentYear,$paymentMonth){

   $query = $this->getEntityManager()->createQuery('
         
        select comp
        from sitereservationBundle:CompanyPayment comp
        join comp.companyId customer
        where comp.companyId = customer.id 
        and  comp.paymentTime like :paymentYear
        and  comp.paymentForMonth = :paymentMonth

    ');
    
    $query->setParameter("paymentYear", $paymentYear."%");
    $query->setParameter("paymentMonth", $paymentMonth);
     

     
     return $query->getResult();
     
     
     
 }
 
 //----------------------------------------///

}
