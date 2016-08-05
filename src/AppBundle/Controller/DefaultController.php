<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AgCrop;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\AgUser;
use AppBundle\Entity\AgUsergroup;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p FROM AppBundle:AgUsergroup p WHERE p.id < :threshold'
        )->setParameter('threshold', 3);
        $categories = $query->getResult();

        if($this->getUser() != null){
            $userid = $this->getUser()->getId();
        }else{
            $userid = 'none';
        }
        return $this->render('default/homepage.html.twig',
            array(
                "error" => "",
                "success" => "",
                "avatar" => "",
                "categories" => $categories,
                "userid" => $userid,
                "uid" => $userid,
            ));
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboardAction()
    {

        if(!$this->getUser()){
            return $this->redirect($this->generateUrl('homepage'));
        }


        if($this->getUser()->getAccountType()->getId() == 2){



            return $this->render('default/dashboard_buis.html.twig',
                array(
                    "avatar" => $this->getUser()->getAvatarUrl(),
                    "username" => $this->getUser()->getUsername(),

                ));
        }else if($this->getUser()->getAccountType()->getId() == 1){

            $allOffers = array();

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
                'SELECT p FROM AppBundle:AgCrop p WHERE p.producer = :uid'
            )->setParameter('uid',  $this->getUser()->getId());
            $products = $query->getResult();

            foreach($products as $product){
                $query = $em->createQuery(
                    'SELECT p FROM AppBundle:AgOffer p WHERE p.crop = :uid'
                )->setParameter('uid', $product->getId());
                $offers = $query->getResult();
                foreach($offers as $offer){
                    array_push($allOffers, $offer);
                }
            }


            $query = $em->createQuery(
                'SELECT p FROM AppBundle:AgProduct p'
            );
            $Allproducts = $query->getResult();

            $offersArray = array();
//            $query = $em->createQuery('SELECT p FROM AppBundle:AgOffer p where p.producer = :prod_id ORDER BY p.isAccepted DESC')->setParameter("prod_id", $this->getUser()->getId());
//            $allOffers = $query->getResult();

            foreach($allOffers as $offer){
                $obj = new \stdClass();

                $obj->id = $offer->getId();
                $obj->business = '<div class="username_" onclick="getSelectedUser('.$offer->getBusiness()->getId().')">'.$offer->getBusiness()->getUsername().'</div>';
                $obj->cropProduct = $offer->getCrop()->getProduct()->getDescription();
                $obj->cropId = $offer->getCrop()->getId();
                $obj->cropPD = date_format($offer->getCrop()->getProducedDate(), 'Y-m-d H:i:s');
                $obj->cropED = date_format($offer->getCrop()->getExpirationDate(), 'Y-m-d H:i:s');
                $obj->amount = $offer->getAmount();
                $obj->totalAmount = $offer->getCrop()->getAmount();
                $obj->reserve = floatval($offer->getCrop()->getAmount()) - floatval($offer->getCrop()->getOnhold());
                $obj->message = $offer->getMessage();
                $obj->price = $offer->getPrice();

                $now = new \DateTime();


                if(!$offer->getIsAccepted() || $offer->getIsAccepted() == 0){
                    $actions = '<div style="float:right;" id="delete_button_'.$offer->getId().'" class="deleteButton" onclick="deleteOffer('.$offer->getId().')"><i class="fa fa-trash-o" aria-hidden="true" style="margin:0px"></i></div>';
                    $actions .= '<div style="float:right;" id="accept_button_'.$offer->getId().'" class="editButton" onclick="acceptOffer('.$offer->getId().')"><i class="fa fa-check" aria-hidden="true" style="margin:0px"></i></div>';
                }else if($offer->getIsAccepted() == 1){
                    $actions = "<green>Accepted on ".date_format($offer->getRdate(), 'Y-m-d H:i:s')."</green>";
                }else{
                    $actions = "<red>Rejected on ".date_format($offer->getRdate(), 'Y-m-d H:i:s')."</red>";
                }

                if(floatval($offer->getAmount()) > $obj->reserve){
                    if($offer->getIsAccepted() != 1){
                        $actions = "<red>Not enough reserve</red>";
                    }
                }

                if($now > $offer->getCrop()->getExpirationDate()){
                    if($offer->getIsAccepted() != 1){
                        $actions = "<red>This crop has expired</red>";
                    }
                }

                $obj->edit = $actions;
                array_push($offersArray, $obj);
            }

            $cropsArray = array();
            $query = $em->createQuery('SELECT p FROM AppBundle:AgCrop p where p.producer = :prod_id')->setParameter("prod_id", $this->getUser()->getId());
            $allCrops = $query->getResult();

            foreach($allCrops as $crop){
                $obj = new \stdClass();

                $obj->id = $crop->getId();
                $obj->cropProduct = $crop->getProduct()->getDescription();
                $obj->cropPD = date_format($crop->getProducedDate(), 'Y-m-d H:i:s');
                $obj->cropED = date_format($crop->getExpirationDate(), 'Y-m-d H:i:s');
                $obj->amount = $crop->getAmount();
                $obj->totalAmount = $crop->getAmount();
                $obj->reserve = floatval($crop->getAmount()) - floatval($crop->getOnhold());
                $obj->price = $crop->getPrice();

                $now = new \DateTime();


                if($now > $crop->getExpirationDate()){
                    if($offer->getIsAccepted() != 1){
                        $actions = "<red>This crop has expired</red>";
                    }
                }

                $obj->edit = $actions;
                array_push($cropsArray, $obj);
            }


            return $this->render('default/dashboard_prod.html.twig',
                array(
                    "avatar" => $this->getUser()->getAvatarUrl(),
                    "username" => $this->getUser()->getUsername(),
                    "offers" => $allOffers,
                    "products" => $Allproducts,
                    'offers_json' => json_encode($offersArray),
                    'crops_json' => json_encode($cropsArray),
                ));
        }
        return $this->redirect($this->generateUrl('homepage'));
    }

    /**
     * @Route("/pricing", name="pricing")
     */
    public function pricingAction()
    {

        return $this->render('default/pricing.html.twig');
    }

    /**
     * @Route("/support", name="support")
     */
    public function supportAction()
    {

        return $this->render('default/support.html.twig');
    }

    /**
     * This is the route the login form submits to.
     *
     * But, this will never be executed. Symfony will intercept this first
     * and handle the login automatically. See form_login in app/config/security.yml
     *
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction(Request $request) {

        throw new \Exception('This should never be reached!');
    }



    /**
     * This is the route the user can use to logout.
     *
     * But, this will never be executed. Symfony will intercept this first
     * and handle the logout automatically. See logout in app/config/security.yml
     *
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction(){


        throw new \Exception('This should never be reached!');
    }


    /**
     * @Route("/getUser", name="getUser")
     */
    public function getUserAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();


        $query = $em->createQuery(
            'SELECT p FROM AppBundle:AgUser p WHERE p.usernameCanonical = :username'
        )->setParameter('username', $_REQUEST['username']);
        if(count($query->getResult()) > 0) {
            $testUser = $query->getResult()[0];
        }else{
            return $this->getErrorResponse("1", "No User");
        }

        return $this->displayXML($this->getUserFullAsXML($testUser));

    }


    /**
     * @Route("/createUser", name="createUser")
     */
    public function createUserAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();

        $login = "";
        $pass = "";
        $email = "";
        if (isset($_REQUEST['username'])) {
            $login = $_REQUEST['username'];
        } else {
            return $this->getErrorResponse("102", "Username is missing");
        }
        if (isset($_REQUEST['password'])) {
            $pass = $_REQUEST['password'];
        } else {
            return $this->getErrorResponse("103", "Password is missing");
        }
        if (isset($_REQUEST['email'])) {
            $email = $_REQUEST['email'];
        } else {
            return $this->getErrorResponse("104", "Email is missing");
        }

        $query = $em->createQuery(
            'SELECT p FROM AppBundle:AgUser p WHERE p.usernameCanonical = :username OR p.email = :email'
        )->setParameter('username', $login)->setParameter('email', $email);
        if(count($query->getResult()) > 0) {
            $testUser = $query->getResult()[0];

            if (trim($testUser->getUsernameCanonical()) == $login) {
                return $this->getErrorResponse("101", "Username Exists");
            } else {
                return $this->getErrorResponse("102", "Email Exists");
            }
        }

        $newUser = new AgUser();
        $newUser->setUsername($login);
        $newUser->setUsernameCanonical($login);
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($newUser);
        $password = $encoder->encodePassword($pass, $newUser->getSalt());
        $newUser->setPassword($password);

        $newUser->setCdate((new \DateTime()));
        $newUser->setEmail($email);
        $newUser->setRoles(['ROLE_USER']);
        $newUser->setRegistrationLat(floatval($_REQUEST['lat']));
        $newUser->setRegistrationLon(floatval($_REQUEST['lon']));
        $newUser->setAvatarUrl('http://62.210.36.88/agrotis/public_assets/avatar.jpg');


        if (isset($_REQUEST['account_type'])) {
            $at = $_REQUEST['account_type'];
            $query = $em->createQuery(
                'SELECT p FROM AppBundle:AgUsergroup p WHERE p.id = :gid'
            )->setParameter('gid', $at);
            $group = $query->getResult()[0];
            $newUser->setAccountType($group);
        }




        $newUser->setActivated(false);
        $verification_code = sha1($password . date_format(new \DateTime(), 'Y-m-d H:i:s'));
        $newUser->setVerificationCode($verification_code);
        $newUser->setEnabled(false);

        $newUser->setEnabled(true);
        $newUser->setActivated(true);

        $em->persist($newUser);
        $em->flush();



        $em->flush();

        return $this->getSuccessResponse($newUser->getId(), "User Created");
    }



    /**
     * @Route("/createCrop", name="createProduct")
     */
    public function createProductAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p FROM AppBundle:AgUser p WHERE p.username = :username'
        )->setParameter('username', $_REQUEST['username_toSearch']);
        $user = $query->getResult()[0];

        $query = $em->createQuery(
            'SELECT p FROM AppBundle:AgProduct p WHERE p.id = :pid'
        )->setParameter('pid', $_REQUEST['product']);
        $product = $query->getResult()[0];

        $newCrop = new AgCrop();

        $newCrop->setProducer($user);
        $newCrop->setProduct($product);

        $date_p = \DateTime::createFromFormat("d/m/Y", $_REQUEST['pDate']);
        $newCrop->setProducedDate($date_p);

        $date_e = \DateTime::createFromFormat("d/m/Y", $_REQUEST['eDate']);
        $newCrop->setExpirationDate($date_e);
        $newCrop->setAmount($_REQUEST['amount']);
        $newCrop->setPrice($_REQUEST['price']);

        $newCrop->setOnhold(0);

        $em->persist($newCrop);
        $em->flush();

        return $this->getSuccessResponse("1", "Product Created");
    }


    /**
     * @Route("/respondToOffer", name="respondToOffer")
     */
    public function respondToOfferAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p FROM AppBundle:AgUser p WHERE p.username = :username'
        )->setParameter('username', $_REQUEST['username_toSearch']);
        $user = $query->getResult()[0];


        $query = $em->createQuery(
            'SELECT p FROM AppBundle:AgOffer p WHERE p.id = :oid'
        )->setParameter('oid', $_REQUEST['offer_id']);
        $offer = $query->getResult()[0];

        if($_REQUEST['isAccepted'] == "false"){
            $offer->setIsAccepted(-1);
        }else{
            $offer->setIsAccepted(1);
            $currentCropAmount = floatval($offer->getCrop()->getAmount());
            $currentCropHold = floatval($offer->getCrop()->getOnhold());

            if($offer->getAmount() <= ($currentCropAmount - $currentCropHold)){
                $offer->getCrop()->setOnhold($currentCropHold + floatval($offer->getAmount()));
            }else{
                return $this->getErrorResponse("100", "Not enough reserve");
            }

        }
        $offer->setRdate(new \DateTime());

        $em->flush();

        return $this->getSuccessResponse("1", "Offer updated");
    }



    /**
     * @Route("/updateUser", name="updateUser")
     */
    public function updateUserAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p FROM AppBundle:AgUser p WHERE p.username = :username'
        )->setParameter('username', $_REQUEST['username_toSearch']);
        $user_to_edit = $query->getResult()[0];

        if($_REQUEST['username'] != "" && $_REQUEST['username'] != $user_to_edit->getUsername()){
            $query = $em->createQuery(
                'SELECT p FROM AppBundle:AgUser p WHERE p.username = :username'
            )->setParameter('username', $_REQUEST['username']);
            if(count($query->getResult()) == 0){
                $user_to_edit->setUsername($_REQUEST['username']);
                $user_to_edit->setUsernameCanonical($_REQUEST['username']);
            }else{
                return $this->getErrorResponse("1", "Username Exists");
            }
        }

        if($_REQUEST['email'] != "" && $_REQUEST['email'] != $user_to_edit->getEmail()){
            $query = $em->createQuery(
                'SELECT p FROM AppBundle:AgUser p WHERE p.email = :email'
            )->setParameter('email', $_REQUEST['email']);
            if(count($query->getResult()) == 0){
                $user_to_edit->setEmail($_REQUEST['email']);
                $user_to_edit->setEmailCanonical($_REQUEST['email']);
            }else{
                return $this->getErrorResponse("2", "Email Exists");
            }
        }

        if($_REQUEST['pass1'] != "" && $_REQUEST['pass2'] != "" && $_REQUEST['pass1'] == $_REQUEST['pass2']){
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($user_to_edit);
            $password = $encoder->encodePassword($_REQUEST['pass2'], $user_to_edit->getSalt());
            $user_to_edit->setPassword($password);
            $user_to_edit->setPasswordPlaintext($_REQUEST['pass2']);
        }

        if($_REQUEST['fname'] != "" && $_REQUEST['fname'] != $user_to_edit->getFname()){
            $user_to_edit->setFname($_REQUEST['fname']);
        }

        if($_REQUEST['lname'] != "" && $_REQUEST['lname'] != $user_to_edit->getLname()){
            $user_to_edit->setLname($_REQUEST['lname']);
        }

        if($_REQUEST['address'] != "" && $_REQUEST['address'] != $user_to_edit->getAddress()){
            $user_to_edit->setAddress($_REQUEST['address']);
        }

        if($_REQUEST['phone'] != "" && $_REQUEST['phone'] != $user_to_edit->getPhone()){
            $user_to_edit->setPhone($_REQUEST['phone']);
        }

        if($_REQUEST['lat'] != "" && $_REQUEST['lat'] != $user_to_edit->getRegistrationLat()){
            $user_to_edit->setRegistrationLat($_REQUEST['lat']);
        }

        if($_REQUEST['lon'] != "" && $_REQUEST['lon'] != $user_to_edit->getRegistrationLon()){
            $user_to_edit->setRegistrationLon($_REQUEST['lon']);
        }

        $em->flush();

        return $this->getSuccessResponse("100", "User Updated");

    }



    function getErrorResponse($code, $message)
    {
        $rootNode = new \SimpleXMLElement('<error id="' . $code . '" message="' . $message . '"/>');
        $domxml = dom_import_simplexml($rootNode);
        $response = new Response(
            $this->render(
                'Api/api.xml.twig',
                array(
                    'result' => $domxml->ownerDocument->saveXML($domxml->ownerDocument->documentElement),
                )
            )->getContent(),
            200
        );
        $response->headers->set('Content-Type', 'text/xml');

        return $response;
    }

    function getSuccessResponse($code, $message)
    {
        $rootNode = new \SimpleXMLElement('<success id="' . $code . '" message="' . $message . '"/>');
        $domxml = dom_import_simplexml($rootNode);
        $response = new Response(
            $this->render(
                'Api/api.xml.twig',
                array(
                    'result' => $domxml->ownerDocument->saveXML($domxml->ownerDocument->documentElement),
                )
            )->getContent(),
            200
        );
        $response->headers->set('Content-Type', 'text/xml');

        return $response;
    }

    function displayXML($rootNode)
    {
        $domxml = dom_import_simplexml($rootNode);
        $response = new Response(
            $this->render(
                'Api/api.xml.twig',
                array(
                    'result' => $domxml->ownerDocument->saveXML($domxml->ownerDocument->documentElement),
                )
            )->getContent(),
            200
        );
        $response->headers->set('Content-Type', 'text/xml');

        return $response;
    }



    function getUserFullAsXML($user)
    {


        $em = $this->getDoctrine()->getManager();
        $rootNode = new \SimpleXMLElement('<Users></Users>');


        $itemNode = $rootNode->addChild('User');
        $itemNode->addAttribute('id', $user->getId());
        $itemNode->addAttribute('accountType', $user->getAccountType()->getDescription());
        $itemNode->addAttribute('accountTypeId', $user->getAccountType()->getId());
        $itemNode->addAttribute('username', $user->getUsername());
        $itemNode->addAttribute('email', $user->getEmail());
        $itemNode->addAttribute('avatar', $user->getAvatarUrl());
        $itemNode->addAttribute('fname', $user->getFname());
        $itemNode->addAttribute('lname', $user->getLname());
        $itemNode->addAttribute('phone', $user->getPhone());
        $itemNode->addAttribute('address', $user->getAddress());
        $itemNode->addAttribute('company', $user->getCompanyName());
        $itemNode->addAttribute('lat', $user->getRegistrationLat());
        $itemNode->addAttribute('lon', $user->getRegistrationLon());

        if($user->getAccountType()->getId() == 1){
            $query = $em->createQuery(
                'SELECT p FROM AppBundle:AgCrop p WHERE p.producer = :pid'
            )->setParameter('pid', $user->getId());
            $products = $query->getResult();

            foreach($products as $product){
                $product_node = $itemNode->addChild('Product');
                $product_node->addAttribute('id', $product->getId());
                $product_node->addAttribute('product_id', $product->getProduct()->getId());
                $product_node->addAttribute('product_name', $product->getProduct()->getDescription());
                $product_node->addAttribute('product_unit', $product->getProduct()->getBaseUnit());
                $product_node->addAttribute('price_per_unit', $product->getPrice());
                $product_node->addAttribute('total_amount', $product->getAmount());
                $product_node->addAttribute('produced_date', date_format($product->getProducedDate(), 'Y-m-d H:i:s'));
                $product_node->addAttribute('expiration_date', date_format($product->getExpirationDate(), 'Y-m-d H:i:s'));

                $query = $em->createQuery(
                    'SELECT p FROM AppBundle:AgOffer p WHERE p.crop = :pid'
                )->setParameter('pid', $product->getId());
                $offers = $query->getResult();

                $offersNode = $product_node->addChild('Offers');
                foreach($offers as $offer){
                    $offerNode = $offersNode->addChild('Offer');
                    $offerNode->addAttribute('id', $offer->getId());
                    $offerNode->addAttribute('user_id', $offer->getBusiness()->getId());
                    $offerNode->addAttribute('user_name', $offer->getBusiness()->getUsername());
                    $offerNode->addAttribute('offer_lat', $offer->getBusiness()->getRegistrationLat());
                    $offerNode->addAttribute('offer_lon', $offer->getBusiness()->getRegistrationLon());
                    $offerNode->addAttribute('amount', $offer->getAmount());
                    $offerNode->addAttribute('offered_price', $offer->getPrice());
                    $offerNode->addAttribute('message', $offer->getMessage());

                    if($offer->getRdate() != null){
                        $offerNode->addAttribute('cdate', date_format($offer->getRdate(), 'Y-m-d H:i:s'));
                    }else{
                        $offerNode->addAttribute('cdate', date_format($offer->getCdate(), 'Y-m-d H:i:s'));
                    }
                    $offerNode->addAttribute('isAccepted', $offer->getIsAccepted());

                    $reviewsNode = $offerNode->addChild('Reviews');
                    $query = $em->createQuery(
                        'SELECT p FROM AppBundle:AgCropReview p WHERE p.crop = :pid'
                    )->setParameter('pid', $product->getId());
                    $offersReviews = $query->getResult();
                    foreach($offersReviews as $review) {
                        $offerNode = $reviewsNode->addChild('Review');
                        $offerNode->addAttribute('id', $review->getId());
                        $offerNode->addAttribute('user_id', $review->getReviewer()->getId());
                        $offerNode->addAttribute('user_name', $review->getReviewer()->getUsername());
                        $offerNode->addAttribute('description', $review->getDescription());
                        $offerNode->addAttribute('score', $review->getScore());
                        $offerNode->addAttribute('hidden', $review->getHidden());
                        $offerNode->addAttribute('cdate', date_format($review->getCdate(), 'Y-m-d H:i:s'));

                    }
                }
            }




        }else{

        }

        return $rootNode;


    }



}
