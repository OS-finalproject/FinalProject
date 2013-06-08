<?php

namespace site\reservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use site\reservationBundle\Entity\Infocomp;
use site\reservationBundle\Entity\Customer;
use Symfony\Component\HttpFoundation\Response;
use site\reservationBundle\Entity\Events;

class SiteController extends Controller
{
    public function indexAction()
    {
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
    public function custhomeAction()
    {
        
        return $this->render('sitereservationBundle:Site:custhome.html.twig');  
    }

    public function UserProfileAction(){
        
        $custid=1; 
   
        
        $cust= $this->getDoctrine()->getEntityManager();
        $repo=$cust->getRepository('sitereservationBundle:Customer');
        $info=$repo->getProfileInfo($custid);
        file:///
        $user= $this->getDoctrine()->getEntityManager();
        $rep=$user->getRepository('sitereservationBundle:Userinfo');
        $extrainfo=$rep->getProfileInfoUser($custid);
      
        return $this->render('sitereservationBundle:Site:userprofile.html.twig', array('custinfo'=>$info,'extrainfo'=>$extrainfo));
             
        
    }
    
        public function UserserviceProviderAction(){
        
            
        $cust= $this->getDoctrine()->getEntityManager();
        $repo=$cust->getRepository('sitereservationBundle:Customer');
        $info=$repo->getAllServiceprovider();
        
   
      
        return $this->render('sitereservationBundle:Site:userprofile.html.twig', array('custinfo'=>$info,'extrainfo'=>$extrainfo));
             
        
    }
}
