<?php
namespace site\reservationBundle\Controller;
use site\reservationBundle\Entity\Events;
use site\reservationBundle\Entity\Userinfo;
use site\reservationBundle\Entity\Customer;
use site\reservationBundle\Entity\Hobbies;
use site\reservationBundle\Form\Type\EventsType;
use site\reservationBundle\Form\Type\CustomerType;
use site\reservationBundle\Form\Type\UserInfoType;
use Symfony\Component\HttpFoundation\Request;
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
       $entity  = new Userinfo();
       $newcustomer=new Customer();
       //$custHobbies=new Hobbies();
       $newcustomer->setType("user");
       $entity->getCustomers()->add($newcustomer);
       //$entity->getHobbies()->add($custHobbies);
       $form = $this->createForm(new UserInfoType(), $entity);
       if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();                     
                $em->persist($newcustomer); 
                $em->flush();
                $repo = $em->getRepository('sitereservationBundle:Customer');
                $cust = $repo->getCustomerId();
                $entity->setCustid($cust);
                $em->persist($entity);        
                $em->flush();
                return $this->render('sitereservationBundle:Default:insertsuccess.html.twig',array('cust'=>$cust));       
           }
        }

        return $this->render('sitereservationBundle:Default:addnewuser.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
