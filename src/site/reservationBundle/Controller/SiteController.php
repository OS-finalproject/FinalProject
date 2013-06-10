<?php

namespace site\reservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use site\reservationBundle\Entity\Infocomp;
use site\reservationBundle\Entity\Customer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookies;
use site\reservationBundle\Entity\Events;

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
    public function companyMenuAction($company)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$repo = $em->getRepository('sitereservationBundle:Infocomp');
    	$Companies = $repo->getCompanies($company);
    	return $this->render('sitereservationBundle:Site:company.html.twig',array('companies'=>$Companies , 'type'=>$company));	
    }
    public function allCompaniesAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$repo = $em->getRepository('sitereservationBundle:Infocomp');
    	$Companies = $repo->getAllCompanies();
    	return $this->render('sitereservationBundle:Site:allCompanies.html.twig',array('companies'=>$Companies));		
    }
    public function getAddressCompanyAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('sitereservationBundle:Address');
        $Address = $repo->getCompanyAddress($id);   
        return new Response ($Address->getStreet().", ".$Address->getCity().", ".$Address->getCountry());
    }
     public function companyProfileAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('sitereservationBundle:Infocomp');
        $companyDetails = $repo->getthisCompany($id);
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('sitereservationBundle:Address');
        $Address = $repo->getCompanyAddress($id);
        return $this->render('sitereservationBundle:Site:companyProfile.html.twig',array('address'=>$Address , 'company'=> $companyDetails));   
    }
    public function aboutAction()
    {
        
        return $this->render('sitereservationBundle:Site:about.html.twig');  
    }
//--------------------------add-----------------------------------------
public function UserProfileAction(){
        
        $custid=1; 
   
        
        $cust= $this->getDoctrine()->getEntityManager();
        $repo=$cust->getRepository('sitereservationBundle:Customer');
        $info=$repo->getProfileInfo($custid);
        $user= $this->getDoctrine()->getEntityManager();
        $rep=$user->getRepository('sitereservationBundle:Userinfo');
        $extrainfo=$rep->getProfileInfoUser($custid);
      
        return $this->render('sitereservationBundle:Site:userprofile.html.twig', array('custinfo'=>$info,'extrainfo'=>$extrainfo));
             
        
    }
    /*
        public function UserserviceProviderAction(){
        
            
        $cust= $this->getDoctrine()->getEntityManager();
        $repo=$cust->getRepository('sitereservationBundle:Customer');
        $info=$repo->getAllServiceprovider();
        
   
      
        return $this->render('sitereservationBundle:Site:userprofile.html.twig', array('custinfo'=>$info,'extrainfo'=>$extrainfo));
             
        
    }*/
    public function custhomeAction()
    {
        
        return $this->render('sitereservationBundle:Site:custhome.html.twig');  
    }
 
    public function alloffersuserAction()
    {
         $cust= $this->getDoctrine()->getEntityManager();
        $repo=$cust->getRepository('sitereservationBundle:Events');
        $info=$repo->getAlluseroffers();
        return $this->render('sitereservationBundle:Site:custoffers.html.twig',array('offers'=>$info));  
    }
    public function eventcatuserAction($cat)
    {
         $cust= $this->getDoctrine()->getEntityManager();
        $repo=$cust->getRepository('sitereservationBundle:Events');
        $info=$repo->getcatoffers($cat);
        return $this->render('sitereservationBundle:Site:custcatoffers.html.twig',array('offers'=>$info));  
    }
    public function signOutAction(){

          $request = $this->getRequest();
          $response = new Response($this->generateUrl('sitereservation_index'));
          
          if( $request->getMethod() == "POST"){
              
                $session = $request->getSession();
                
                $session->clear();
                
                if( $request->cookies->has('type') ){
                    
                   $keys = $request->cookies->keys();
                    
                    foreach ($keys as $key ){
                        
                        //$cookie = new Cookie($key,'',time()-3600 * 24 * 30);    
                       // $response->clearCookie($k);
                        $response->headers->clearCookie($key);
                        
                    }
                                        
                                       
                   
                }
                                                                
          }
          
         return $response;
                          
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
