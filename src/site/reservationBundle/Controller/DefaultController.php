<?php
namespace site\reservationBundle\Controller;

use site\reservationBundle\Entity\Events;
use site\reservationBundle\Entity\Userinfo;
use site\reservationBundle\Entity\Customer;
use site\reservationBundle\Entity\Hobbies;
use site\reservationBundle\Entity\Messages;
use site\reservationBundle\Entity\info;
use site\reservationBundle\Entity\Infocomp;
use site\reservationBundle\Entity\Address;


use site\reservationBundle\Form\Type\MessageType;
use site\reservationBundle\Form\Type\EventsType;
use site\reservationBundle\Form\Type\CustomerType;
use site\reservationBundle\Form\Type\UserInfoType;
use site\reservationBundle\Form\Type\InfoCompType;
use site\reservationBundle\Form\Type\companyAddressType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('sitereservationBundle:Default:index.html.twig', array('name' => $name));
    }
     public function addeventAction(Request $request)
    {
        $entity  = new Events();
        $entity->setRating(0);
        $entity->setIsdeleted(0);
        $form = $this->createForm(new EventsType(), $entity);
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                echo '<script>alert("heba")</script>';
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);             
                $em->flush();
                return $this->render('sitereservationBundle:Default:insertsuccess.html.twig');  
        }
    }
        return $this->render('sitereservationBundle:Default:addeventform.html.twig', array(
            'form' => $form->createView(),
        ));
        
    }


    public function addnewuserAction(Request $request)
    {
       $newcustomer=new Customer();
       $newcustomer->setType("user");
       $form = $this->createForm(new CustomerType(), $newcustomer);
       if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();                     
                $em->persist($newcustomer); 
                $em->flush();
                $repo = $em->getRepository('sitereservationBundle:Customer');
                $cust = $repo->getCustomerId();
                
                return $this->redirect($this->generateUrl('sitereservation_extrauserinfo',array('id'=>$cust[0]->getId()),true));  
           }
        }

        return $this->render('sitereservationBundle:Default:addnewuser.html.twig', array(
             'form' => $form->createView(),
        ));
        
    }
    
    public function addNewCompanyAction(Request $request){
        
        
       $newcustomer=new Customer();
       $newcustomer->setType("company");
       
       $form = $this->createForm(new CustomerType(), $newcustomer);
       
       if ($request->isMethod('POST')) {
         
            $form->bind($request);
            
            if ($form->isValid()) {
       
                $email = $newcustomer->getEmail();
                
                $em = $this->getDoctrine()->getManager();                     
                $em->persist($newcustomer); 
                $em->flush(); 
                $newCustomer = $em->getRepository('sitereservationBundle:Customer')->findOneBy( array('email'=>$email) );
                
                $id = $newCustomer->getId();
                
               return $this->redirect($this->generateUrl('sitereservation_addNewCompanyInfo',array('id'=>$id),TRUE));
                
               //return new Response($this->addNewCompanyInfoAction($id));
                
           }
            
            
        }
                
        return $this->render('sitereservationBundle:Default:addNewCompany.html.twig',
                array( 'form'=> $form->createView() ) );
    }
    
    
    public function addNewCompanyInfoAction($id){
        
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        
        $customer = $em->getRepository('sitereservationBundle:Customer')->findOneBy( array('id'=>$id) );
        
        $company = new Infocomp();
        $company->setCustid($customer);
        
        $form = $this->createForm(new InfoCompType(),$company);
        
        if( $request->getMethod() == "POST" ){
            
            
            $form->bind($request);
            
            if( $form->isValid() ){
                                
                $em->persist($company);
                $em->flush();
                               
               return $this->redirect($this->generateUrl('sitereservation_addNewCompanyAdress',array('id'=>$id),TRUE));
                
               // return new Response($this->addNewCompanyAddressAction($id));
            }
            
            
        }
                
        return $this->render('sitereservationBundle:Default:addNewCompanyInfo.html.twig',
                array( 'form'=> $form->createView(),'costumerId'=>$id ) );
    }

        
    public function addNewCompanyAddressAction($id){
        
        $request = $this->getRequest();
       
        $em = $this->getDoctrine()->getManager();        
        $customer = $em->getRepository('sitereservationBundle:Customer')->findOneBy( array('id'=>$id) );
                
        $companyAddress = new Address();        
        $companyAddress->setComp( $customer );
        $companyAddress->setHead('yes');
        
        $form = $this->createForm(new companyAddressType(),$companyAddress);
        
        if( $request->getMethod() == "POST" ){
            
            
            $form->bind($request);
            
            if( $form->isValid() ){
                                                
                $em->persist($companyAddress);
                $em->flush();
                               
                return $this->redirect($this->generateUrl('sitereservation_firstSignIn',array('id'=>$id),true));
                  
               
            }
            
            
        }
                
        return $this->render('sitereservationBundle:Default:addNewCompanyAddress.html.twig',
                array( 'form'=> $form->createView(),'costumerId'=>$id ) );
    }
    

    public function extrauserAction(Request $request,$id)
    {
       $entity  = new Userinfo();
       $form = $this->createForm(new UserinfoType(), $entity);
       if ($request->isMethod('POST')) {

            $form->bind($request);
            if ($form->isValid()) {    
            
                $em = $this->getDoctrine()->getManager();           
                $repo = $em->getRepository('sitereservationBundle:Customer');
                $cust = $repo->getProfileInfo($id);
                $entity->setCustid($cust[0]);                    
                $em->persist($entity); 
                $em->flush();
                //return $$this->redirect($this->generateUrl('sitereservation_addressuserinfo',{'id':$cust[0]['id']}));  
            return $this->render('sitereservationBundle:Default:insertsuccess.html.twig');

           }
        }

        return $this->render('sitereservationBundle:Default:extrauserinfo.html.twig', array(
            'form' => $form->createView(),'id'=>$id
        ));
    }
   /* public function addressuserinfoAction(Request $request,$id)
    {
       $entity  = new Hobbies();
       $form = $this->createForm(new HobbiesType(), $entity);
       if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {                
                $repo = $em->getRepository('sitereservationBundle:Customer');
                $cust = $repo->find($id);
                $entity->setCustid($cust);
                $em = $this->getDoctrine()->getManager();                     
                $em->persist($entity); 
                $em->flush();
                return $this->render('sitereservationBundle:Default:insertsuccess.html.twig');
           }
        }

        return $this->render('sitereservationBundle:Default:addextrainfo.html.twig', array(
            'form' => $form->createView(),
        ));
    }*/

     public function contactusAction(Request $request,$id)
    {
        $entity  = new Messages();        
        $cust= $this->getDoctrine()->getEntityManager();
        $repo=$cust->getRepository('sitereservationBundle:Customer');
        $info=$repo->getAdmin();
        $sender=$repo->getProfileInfo($id);
        $entity->setMsgfrom($sender[0]);
        $entity->setMsgto($info);
        $form = $this->createForm(new MessageType(), $entity);
        if ($request->isMethod('POST')) {
            $form->bind($request);
            //if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);             
                $em->flush();
                return $this->render('sitereservationBundle:Default:insertsuccess.html.twig');  
       // }
    }
        return $this->render('sitereservationBundle:Default:contactus.html.twig', array(
            'form' => $form->createView(),'sender'=>$sender,
        ));
        
    }
}
