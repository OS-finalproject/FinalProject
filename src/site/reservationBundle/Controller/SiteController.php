<?php

namespace site\reservationBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookies;


use site\reservationBundle\Entity\Infocomp;
use site\reservationBundle\Entity\Customer;
use site\reservationBundle\Entity\Events;
use site\reservationBundle\Entity\Messages;
use site\reservationBundle\Entity\Userevent;
use site\reservationBundle\Entity\CompanyPayment;

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
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('sitereservationBundle:Events');
        $offers = $repo->getLatestOffer();
        return $this->render('sitereservationBundle:Site:home.html.twig', array("offers" => $offers));
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
        public function companyMenuAction($company,$id,$page) {
        $maxResult=6;
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('sitereservationBundle:Infocomp');
        $Companies = $repo->getCompanies($company,$id,$page,$maxResult);
        $counts=$repo->getTypeCount($company);
        $count=$counts['0']['counts'];
        $lastPageno=(int)($count/$maxResult);
        if(($count%$maxResult)>0){
                $lastPageno++;
            }
        return $this->render('sitereservationBundle:Site:company.html.twig', array('companies' => $Companies, 'company' => $company, 'cat' => $company, 'id'=>$id,
        'lastPageno'=>$lastPageno,'page'=>$page));
    }

    public function allCompaniesAction($id,$page) {
        $maxResult=2;
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('sitereservationBundle:Infocomp');
        $Companies = $repo->getAllCompanies($id,$page,$maxResult);
        $counts=$repo->getCount();
        $count=$counts['0']['counts'];
        $lastPageno=(int)($count/$maxResult);
        if(($count%$maxResult)>0){
                $lastPageno++;
            }
        return $this->render('sitereservationBundle:Site:allCompanies.html.twig', array('companies' => $Companies , 'id'=>$id,
        'lastPageno'=>$lastPageno,'page'=>$page));
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
 
public function alloffersuserAction($id,$page) {
        $maxResult=6;
        $cust = $this->getDoctrine()->getEntityManager();
        $repo = $cust->getRepository('sitereservationBundle:Events');
        $info = $repo->getAlluseroffers($id,$page,$maxResult);
        $counts=$repo->getOfferCount();
        $count=$counts['0']['counts'];
        $lastPageno=(int)($count/$maxResult);
        if(($count%$maxResult)>0){
                $lastPageno++;
            }
        return $this->render('sitereservationBundle:Site:custoffers.html.twig', array('offers' => $info , 'id'=>$id,
        'lastPageno'=>$lastPageno,'page'=>$page));
    }

    public function eventcatuserAction($cat,$id,$page) {
        $maxResult=6;
        $cust = $this->getDoctrine()->getEntityManager();
        $repo = $cust->getRepository('sitereservationBundle:Events');
        $info = $repo->getcatoffers($cat,$id,$page,$maxResult);
        $counts=$repo->getTypeOfferCount($cat);
        $count=$counts['0']['counts'];
        $lastPageno=(int)($count/$maxResult);
        if(($count%$maxResult)>0){
                $lastPageno++;
            }
        return $this->render('sitereservationBundle:Site:custcatoffers.html.twig', array('offers' => $info, 'cat' => $cat , 'id'=>$id,
        'lastPageno'=>$lastPageno,'page'=>$page));
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
     
                  if($result[0]->getType() == "admin"){
                      
                       $responseMessage = $this->generateUrl('sitereservation_AdminProfile');
                            
                  }else{
                  
                       $responseMessage ="ok";
                  }
                  
                  
              }  else {

                  $responseMessage ="fail";                                                                             
              }
                          
             
             $response->setContent($responseMessage);
             
             return $response->sendHeaders();
                          
             
         }
        
                
    }
    public function profileofferAction($id){
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('sitereservationBundle:Events');
        $eventDetails = $repo->getprofileoffer($id);
        return $this->render('sitereservationBundle:Site:offerprofile.html.twig',array('events'=> $eventDetails));
    }
    public function registerofferAction($id,$eventid){
        $em = $this->getDoctrine()->getEntityManager();
        $repouser = $em->getRepository('sitereservationBundle:Customer');
        $user = $repouser->findOneBy(array('id'=>$id));
        $repoevent=$em->getRepository('sitereservationBundle:Events');
        $event = $repoevent->findOneBy(array('id'=>$eventid));
        $usereventreg=new Userevent();
        $usereventreg->setRating(0);
        $usereventreg->setEvalstate(0);
        $usereventreg->setEvent($event);
        $usereventreg->setUser($user);
        $em->persist($usereventreg);
        $em->flush();
        $repoevent->updateoffer($eventid);
        $em->flush();
        $event = $repoevent->findOneBy(array('id'=>$eventid));
        if($event->getAvailable() == 1){
            $repoevent->updateofferagain($eventid);
            $em->flush();
            return $this->redirect($this->generateUrl('sitereservation_userAllOffers'));
        }else{
            
        return $this->redirect($this->generateUrl('sitereservation_EventProfileinfo',array('id'=> $eventid),true));
        }
        
        }
        
        public function deleteofferAction($id,$eventid){
        $em = $this->getDoctrine()->getEntityManager();
        $repouser = $em->getRepository('sitereservationBundle:Customer');
        $user = $repouser->findOneBy(array('id'=>$id));
        $repoevent=$em->getRepository('sitereservationBundle:Events');
        $event = $repoevent->findOneBy(array('id'=>$eventid));
        
        if($event->getComp()->getId() == $id){
            $repoevent->updateofferagain($eventid);
            $em->flush();
            return $this->redirect($this->generateUrl('sitereservation_userAllOffers'));
        }else{            
        return $this->redirect($this->generateUrl('sitereservation_EventProfileinfo',array('id'=> $eventid),true));
        }
        
        }
        public function publishofferAction($id,$eventid,$state){
        $em = $this->getDoctrine()->getEntityManager();
        $repouser = $em->getRepository('sitereservationBundle:Customer');
        $user = $repouser->findOneBy(array('id'=>$id));
        $repoevent=$em->getRepository('sitereservationBundle:Events');
        $event = $repoevent->findOneBy(array('id'=>$eventid));    
       // return new Response($id);
        if($event->getComp()->getId() == $id){
            $repoevent->publishoffer($eventid,$state);
            $em->flush();
            return $this->redirect($this->generateUrl('sitereservation_userAllOffers'));
        }else{            
        return $this->redirect($this->generateUrl('sitereservation_EventProfileinfo',array('id'=> $eventid),true));
        }
        
        }
         public function getcompcatAction(){
        
         $request = $this->getRequest();
         $responseMessage = "";
         $response = new Response();
                  
         if($request->getMethod()== "POST"){
        
              $cat = $request->request->get('cat');                       
              $em = $this->getDoctrine()->getEntityManager();
              $result = $em->getRepository('sitereservationBundle:Infocomp')->findBy(array('category'=>$cat));
              $responseMessage.="<option>Select Company</option>";
              if( $result){
                  for($i=0;$i<sizeof($result);$i++){
                      $responseMessage.="<option name='". $result[$i]->getCustid()->getId()."' value='".$result[$i]->getCustid()->getUserName()."'>".$result[$i]->getCustid()->getUserName()."</option>";
                  }
                  
                  }               
             
             $response->setContent($responseMessage);
             
             return $response->sendHeaders();                     
             
         }     
    }
      public function sendmessageusercompAction($id){
        
         $request = $this->getRequest();
         $responseMessage = "";
         $response = new Response();
                  
         if($request->getMethod()== "POST"){
        
              $cat = $request->request->get('cat');
              $comp = $request->request->get('comp');
              $msg = $request->request->get('msg');
              $rec = $request->request->get('recid');
              $em = $this->getDoctrine()->getEntityManager();
              $receiver = $em->getRepository('sitereservationBundle:Customer')->findOneBy(array('id'=>$rec));
              $sender = $em->getRepository('sitereservationBundle:Customer')->findOneBy(array('id'=>$id));
              $entity  = new Messages();
              $entity->setMsgfrom($sender);
               $entity->setMsgto($receiver);
               $entity->setMessage($msg);
             $em = $this->getDoctrine()->getManager();
                $em->persist($entity);             
                $em->flush();
             $response->setContent("your message is sent successuflly");
             
             return $response->sendHeaders();                     
             
         }     
    }
     public function searchAction(){
        $request = $this->getRequest();
        $searchKey = $request->request->get("searchkey");
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('sitereservationBundle:Customer');
        $searchResults = $repo->getsearchResult($searchKey);
        return $this->render('sitereservationBundle:Site:searchResults.html.twig',array('results'=> $searchResults));
    }
public function restInfoCompAction($id){
$em = $this->getDoctrine()->getEntityManager();
$repo = $em->getRepository('sitereservationBundle:Infocomp');
$companyDetails = $repo->getthisCompany($id);
return $this->render('sitereservationBundle:Site:restSearchResults.html.twig',array('company'=> $companyDetails));  
}
public function userprofileAction() {
        
       $request = $this->getRequest();
       $session = $request->getSession();
    
        if($session->get('type') == "company" || $session->get('type') == "user"   ){
                $cust = 1;
                $em = $this->getDoctrine()->getEntityManager();
                $repo = $em->getRepository('sitereservationBundle:Customer');
                $info = $repo->getProfileInfo($cust);

                $user = $this->getDoctrine()->getEntityManager();
                $rep = $user->getRepository('sitereservationBundle:Userinfo');
                $extinfo = $rep->getProfileInfoUser($cust);
                return $this->render('sitereservationBundle:Site:userprofile.html.twig', array('custinfo' => $info, 'userinfo' => $extinfo));
                
        }else if( $session->get('type') == "admin" ){
      
                return $this->redirect( $this->generateUrl('sitereservation_AdminProfile') );
            
        }else{
            
                return $this->redirect( $this->generateUrl('sitereservation_index') );
            
        }   
        
    }
 public function calendarAction() {

        $country = array(
            "GB" => "United Kingdom", "US" => "United States", "AU" => "Australia", "AT" => "Austria",
            "BS" => "Bahamas", "BH" => "Bahrain", "BR" => "Brazil", "CA" => "Canada", "CN" => "China",
            "HR" => "Croatia (Local Name: Hrvatska)", "EG" => "Egypt", "FR" => "France", "DE" => "Germany", "GR" => "Greece",
            "HK" => "Hong Kong", "IN" => "India", "ID" => "Indonesia", "IT" => "Italy", "JP" => "Japan",
            "JO" => "Jordan", "KP" => "Korea, Democratic People's Republic Of", "KR" => "Korea, Republic Of",
            "KW" => "Kuwait", "LB" => "Lebanon", "ML" => "Mali", "MX" => "Mexico", "MA" => "Morocco", "NP" => "Nepal",
            "NL" => "Netherlands", "AN" => "Netherlands Antilles", "PE" => "Peru", "PL" => "Poland", "PT" => "Portugal",
            "PR" => "Puerto Rico", "QA" => "Qatar", "RE" => "Reunion", "RO" => "Romania", "RU" => "Russian Federation",
            "ZA" => "South Africa", "GS" => "South Georgia, South Sandwich Islands", "ES" => "Spain", "SD" => "Sudan", "SE" => "Sweden",
            "CH" => "Switzerland", "SY" => "Syrian Arab Republic", "TW" => "Taiwan", "TN" => "Tunisia",
            "TR" => "Turkey", "TM" => "Turkmenistan", "AE" => "United Arab Emirates", "UM" => "United States Minor Outlying Islands",
        );

        return $this->render('sitereservationBundle:Site:calendar.html.twig', array('country' => $country));
    }

    public function getcitiesAction(Request $reqeust) {

        $cities = array('Egypt' => array('Cairo', 'Alexandria', 'Gizeh', 'Port Said', 'Suez', 'Luxor', 'Ismailia', 'Aswan', 'Hurghada', 'Arish', 'Marsa Matruh', 'Sharm-El-Sheikh'),
            'France' => array('Paris', 'Lyon', 'Marseille'), 'Italy' => array('Rome', 'Milan', 'Naples', 'Venice', 'Vicenza'),
            'Spain' => array('Madrid', 'Barcelona', 'Valencia'), 'United Kingdom' => array('London', 'Manchester', 'Liverpool'),
            'United States' => array('New York', 'Los Angeles', 'Chicago', 'Boston', 'Miami'),
        );

        $country = $reqeust->request->get('country');

        foreach ($cities as $key => $value) {
            if ($key == $country) {

                return new Response(json_encode($value));
            }
        }
    }

    public function putcalendardataAction(Request $reqeust) {
        $em = $this->getDoctrine()->getManager();
        $custid = 106;
        $from = $reqeust->request->get('from');
        $to = $reqeust->request->get('to');
        $country = $reqeust->request->get('country');
        $city = $reqeust->request->get('city');
        $categry = $reqeust->request->get('categry');

        $x=new \DateTime($from);
        $y=new \DateTime($to);

         
        $data = new Calendar();

        $data->setUser($em->getRepository("sitereservationBundle:Customer")->find($custid));
        $data->setCity($city);
        $data->setDatefrom($x);
        $data->setDateto($y);
        $data->setCountry($country);
        $data->setCategory($categry);


        $em->persist($data);
        $em->flush();

        return new Response('data');
    }
    public function showmessagesAction(Request $request)
    {
        $session=$request->getSession();
        $receiverid=$session->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $messages = $em->getRepository('sitereservationBundle:Messages')->getmessages($receiverid);
        return $this->render('sitereservationBundle:Site:showmessages.html.twig', array('messages' => $messages));
    }
    
    public function signInPageForSmallDeviceAction(){
        
     
        return $this->render('sitereservationBundle:Site:signInPageOfSmallDevices.html.twig');
        
    }
    
    

    //------------- admin ------------------////
    
    public function adminProfileAction(){
       
        
       $request = $this->getRequest();
       $session = $request->getSession();
       $em = $this->getDoctrine()->getManager();
        
       
       if ( $session->get('type') == "admin" ){
       
            $id = $session->get('id');

            $admin =$em->getRepository("sitereservationBundle:Customer")->find($id);
            
            if( $request->getMethod() == "POST" ){
                
                
                $userName = $request->request->get('username');
                $password = $request->request->get('password');
                $email = $request->request->get('email');
                
               
                       
                if( strlen($userName) != 0 && strlen($email)  != 0 && strlen($password)  != 0 ){


                   try{
                         //echo "email:".$email;
                        //echo "pass:".$password;
              
                         $admin->setUsername($request->request->get('username'));
                         $admin->setPassword($password);
                         $admin->setEmail($email);

                         $em->flush();
                         $responseMessage = "ok,ok";

                    }catch( \Exception $e ){
                        
                        
                        $responseMessage = "fail,This Email is used !!";
                        //return $this->render('sitereservationBundle:Site:editAdminProfile.html.twig',array('admin'=>$admin,'emailError'=>" This Email is used !! "));

                    }
              
                }else{
                    
                    $responseMessage = "fail,Enter ALL Fields";    
                }
                //return $this->render('sitereservationBundle:Site:adminProfile.html.twig',array('admin'=>$admin));  
                
                return new Response($responseMessage);
            }
            
            return $this->render('sitereservationBundle:Site:adminProfile.html.twig',array('admin'=>$admin));
            
              
       }else {
           
           return $this->redirect( $this->generateUrl('sitereservation_index') );
           
       }
        
    }
    
    
    public function getAllReportsAction(){
        
       $request = $this->getRequest();
       $session = $request->getSession();
        
       if ( $session->get('type') == "admin" ){
            
           return $this->render('sitereservationBundle:Site:getAllReports.html.twig');        
           
       } else {
           
          return $this->redirect( $this->generateUrl('sitereservation_index') );
           
       }

        
    }

    
    public function adminAddDataAction(){
        
        
       $request = $this->getRequest();
       $session = $request->getSession();
        
       if ( $session->get('type') == "admin" ){
            
          return $this->render('sitereservationBundle:Site:addData.html.twig');       
           
       } else {
           
          return $this->redirect( $this->generateUrl('sitereservation_index') );
           
       }

        
    }
    
    public function activeNewCompanyrequestAction(){
        
        
        $request = $this->getRequest();
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        
        if ( $session->get('type') == "admin" ){
        
                $companys = $em->getRepository("sitereservationBundle:Customer")->getUnactiveCompany();

                if( $request->getMethod() == "POST" ){

                    $companyId = $request->request->get('companyId');

                    $company = $em->getRepository("sitereservationBundle:Infocomp")->findOneBy( array('id'=>$companyId) );

                    $company->setIs_active(1);

                    $em->flush();

                    return new Response("ok");

                }

                return $this->render('sitereservationBundle:Site:activeNewCompany.html.twig',
                            array("companys"=>$companys)
                        );
                
       } else {
           
          return $this->redirect( $this->generateUrl('sitereservation_index') );
           
       }
        
   }
   
   
   public function addPaymentForCompanyAction(){
                             
        $request = $this->getRequest();
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        
        //$companys = $em->getRepository("sitereservationBundle:Customer")->getAllCompany();
        
        if ( $session->get('type') == "admin" ){
        
                    $companys = $em->getRepository("sitereservationBundle:Customer")->findBy( array('type'=>'company') );                

                    if( $request->getMethod() == "POST" ){

                        
                        
                        $companyId = $request->request->get('companyId');
                        $payment = $request->request->get('payment');
                        $paymentTime = $request->request->get('paymentTime');
                        $paymentOfCompanyForMonth = $request->request->get('paymentOfCompanyForMonth');

                        if($companyId != 0 && $payment != 0 && $paymentOfCompanyForMonth != 0 && strlen($paymentTime) > 0 ){

                                $cutomer = $em->getRepository("sitereservationBundle:Customer")->find($companyId);
                            
                                $paymentCompany = new CompanyPayment();

                                $paymentCompany->setCompanyId($cutomer);
                                $paymentCompany->setPayment($payment);
                                $paymentCompany->setPaymentTime( new \DateTime($paymentTime) );
                                $paymentCompany->setPaymentForMonth($paymentOfCompanyForMonth);

                                $em->persist($paymentCompany);
                                $em->flush();

                                return new Response("ok");
                        }else{

                                return new Response("fail");                
                        }

                    }

                    return $this->render('sitereservationBundle:Site:addPaymentForCompany.html.twig',
                                array("companys"=>$companys)
                            ); 
        
       } else {
           
          return $this->redirect( $this->generateUrl('sitereservation_index') );
           
       }
       
   }
   
   public function showUnPaymentCompanyAction(){
       
        $request = $this->getRequest();
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();

        if ( $session->get('type') == "admin" ){
            
                 if( $request->getMethod() == "POST" ){
            
                     
                      $paymentYear = $request->request->get('paymentYear');
                      $paymentMonth = $request->request->get('paymentMonth');
                              
                      $companys = $em->getRepository("sitereservationBundle:Customer")->getUnpaymentCompany($paymentYear,$paymentMonth);
                      $allCompanys = $em->getRepository("sitereservationBundle:Customer")->findAll(); 
                     
                      return $this->render( "sitereservationBundle:Site:ShowUnPaymentCompanyResult.html.twig",array('companys'=>$companys,'allCompanys'=>$allCompanys) ) ; 
            
                     
                 }
                 
                 return $this->render('sitereservationBundle:Site:ShowUnPaymentCompany.html.twig'); 
            
        }else {
           
          return $this->redirect( $this->generateUrl('sitereservation_index') );
           
       }
       
       
   }

   
   public function showActiveUserAction(){
       
        $request = $this->getRequest();
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
       
        if ( $session->get('type') == "admin" ){
       
                $events = $em->getRepository("sitereservationBundle:Userevent")->findAll();
                $customer = $em->getRepository("sitereservationBundle:Customer")->findBy( array("type"=>"user") );
                        
                return $this->render("sitereservationBundle:Site:ShowActiveUserReport.html.twig",array("events"=>$events,"customers"=>$customer));
            
            
        }else {
           
          return $this->redirect( $this->generateUrl('sitereservation_index') );
           
       }
       
   }
   
      public function showUnActiveUserAction(){
       
        $request = $this->getRequest();
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
       
        if ( $session->get('type') == "admin" ){
       
                $events = $em->getRepository("sitereservationBundle:Userevent")->findAll();
                $customer = $em->getRepository("sitereservationBundle:Customer")->findBy( array("type"=>"user") );
                        
                return $this->render("sitereservationBundle:Site:ShowUnActiveUserReport.html.twig",array("events"=>$events,"customers"=>$customer));
            
            
        }else {
           
          return $this->redirect( $this->generateUrl('sitereservation_index') );
           
       }
       
   }

  

   //-------------------------------------------------------///
}
