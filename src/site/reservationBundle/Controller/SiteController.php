<?php

namespace site\reservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use site\reservationBundle\Entity\Infocomp;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookies;
use site\reservationBundle\Entity\Events;
use site\reservationBundle\Entity\Customer;

class SiteController extends Controller
{
    public function indexAction()
    {
        $request = $this->getRequest();
        
        if( $request->cookies->has('type') ){
        
            $session = $request->getSession();
            
            $session->set('id', $request->cookies->get('id'));
            $session->set('username', $request->cookies->get('username'));
            $session->set('type', $request->cookies->get('type'));                     
            
        
        }
        return $this->render('sitereservationBundle:Site:home.html.twig');
    }

    public function sucompanyAction()
    {

        return $this->render('sitereservationBundle:Site:sucompany.html.twig');
    }

    public function companySubmitAction()
    {
    	$request = $this->getRequest();
		$companyName = $request->request->get('Name');
		$passwd = $request->request->get('passwd');
		$confpass = $request->request->get('confPasswd');
		$companyEmail = $request->request->get('email');
		$companyActivity = $request->request->get('activity');
		$companyWebsite = $request->request->get('website');
		$data = $request->request->get('data');
		if($passwd != $confpass)
			{
				return $this->render('sitereservationBundle:Site:sucompany.html.twig',array("name"=>$companyName , "email"=>$companyEmail , "website"=>$companyWebsite));
			}
		else{
			    $company = new Infocomp();
			    $company->setName($companyName);
			    $company->setEmail($companyEmail);
			    $company->setWebsite($companyWebsite);
			    $company->setImage("imgurl");
			    $company->setCategory($companyActivity);
			    $company->setPassword(password_hash($passwd));
			    $em = $this->getDoctrine()->getManager();
			    $em->persist($company);
			    $em->flush();
		}
        return $this->render('sitereservationBundle:Site:sucompany.html.twig');
    }
    public function getAllOffersAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$repo = $em->getRepository('sitereservationBundle:Events');
    	$offers = $repo->getOffers();
    	return $this->render('sitereservationBundle:Site:guestoffers.html.twig',array('offers'=>$offers));	
    }
    
    public function SignInAction(){
        
         $request = $this->getRequest();
         $responseMessage = "";
         $response = new Response();
                  
         if($request->getMethod()== "POST"){
        
              $userEmail = $request->request->get('userEmail');
              $userPassword = $request->request->get('userPass');
              $checkBox = $request->request->get('rememberMe');
              
                       
              $em = $this->getDoctrine()->getEntityManager();
              $result = $em->getRepository('sitereservationBundle:Customer')->getCustomerInfo($userEmail,$userPassword);

              if( $result){
                  
                  $session = $request->getSession();
                  
                  $session->start();
                  
                  $session->set('id',$result[0]->getId());
                  $session->set('username',$result[0]->getUsername());
                  //$session->set('email',$result[0]->getEmail());
                  //$session->set('password',$result[0]->getPassword());
                  //$session->set('image',$result[0]->getFile());
                  //$session->set('telephone',$result[0]->getTelephone());
                  $session->set('type',$result[0]->getType());
                  
                  
                  if($checkBox == "rememderMe"){
                      
                      $id = new Cookie('id',$result[0]->getId(),  time() + 3600 * 24 * 30 );
                      $username = new Cookie('username',$result[0]->getUsername(),  time() + 3600 * 24 * 30 );
                      /*$email = new Cookie('email',$result[0]->getEmail(),  time() + 3600 * 24 * 30 );
                      $password = new Cookie('password',$result[0]->getPassword(),  time() + 3600 * 24 * 30 );
                      $iamge = new Cookie('image',$result[0]->getFile(),  time() + 3600 * 24 * 30 );
                      $telephone = new Cookie('telephone',$result[0]->getTelephone(),  time() + 3600 * 24 * 30 );*/
                      $type = new Cookie('type',$result[0]->getType(),  time() + 3600 * 24 * 30 );
                      
                      
                      $response->headers->setCookie($id);
                      $response->headers->setCookie($username);
                      /*$response->headers->setCookie($email);
                      $response->headers->setCookie($password);
                      $response->headers->setCookie($iamge);
                      $response->headers->setCookie($telephone);*/
                      $response->headers->setCookie($type);
                      
                      
                  }
                  
                  
                  $responseMessage ="ok";
                  
              }  else {

                  $responseMessage ="fail";                                                                             
              }
                          
             
             $response->setContent($responseMessage);
             
             return $response->sendHeaders();
                          
             
         }
        
                
    }


}
