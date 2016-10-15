<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AgCrop;

use AppBundle\Entity\AgCropAsset;
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


            $allOffers = array();

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
                'SELECT p FROM AppBundle:AgOffer p WHERE p.business = :uid'
            )->setParameter('uid', $this->getUser()->getId());
            $offers = $query->getResult();
            foreach($offers as $offer){
                array_push($allOffers, $offer);
            }


            $query = $em->createQuery('SELECT p FROM AppBundle:AgProduct p');
            $Allproducts = $query->getResult();

            $offersArray = array();

            foreach($allOffers as $offer){
                $obj = new \stdClass();

                $obj->id = $offer->getId();
                $obj->producer = '<div class="username_" onclick="getSelectedUser('.$offer->getProducer()->getId().')">'.$offer->getProducer()->getUsername().'</div>';
                $obj->cropProduct = $offer->getCrop()->getProduct()->getDescription();
                $obj->cropPD = date_format($offer->getCrop()->getProducedDate(), 'Y-m-d H:i:s');
                $obj->cropED = date_format($offer->getCrop()->getExpirationDate(), 'Y-m-d H:i:s');
                $obj->amount = $offer->getAmount();
                $obj->message = $offer->getMessage();
                $obj->price = $offer->getPrice();

                $now = new \DateTime();


                if(!$offer->getIsAccepted() || $offer->getIsAccepted() == 0){
                    $actions = '<div style="float:right;" id="delete_button_'.$offer->getId().'" class="deleteButton" onclick="deleteOffer('.$offer->getId().')"><i class="fa fa-trash-o" aria-hidden="true" style="margin:0px"></i></div>';
                    $actions .= '<div style="float:right;" id="edit_button_'.$offer->getId().'" class="activateButton" onclick="editOffer('.$offer->getId().')"><i class="fa fa-edit" aria-hidden="true" style="margin:0px"></i></div>';
                }else if($offer->getIsAccepted() == 1){
                    $actions = "<green>Accepted on ".date_format($offer->getRdate(), 'Y-m-d H:i:s')."</green>";
                }else{
                    $actions = "<red>Rejected on ".date_format($offer->getRdate(), 'Y-m-d H:i:s')."</red>";
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
            $infoArray = array();
            $query = $em->createQuery('SELECT p FROM AppBundle:AgCrop p');
            $allCrops_ = $query->getResult();
            $allCrops = array();
            foreach($allCrops_ as $crop){
                $producer_to_find = 0;
                $product_to_find = 0;
                $min = -1;
                $max = PHP_INT_MAX;
                $distance = round($this->distance($this->getUser()->getRegistrationLat(), $this->getUser()->getRegistrationLon(), $crop->getProducer()->getRegistrationLat(), $crop->getProducer()->getRegistrationLon(), "K"), 2);
                if(isset($_REQUEST['producer_id']) && $_REQUEST['producer_id'] != "0"){
                    $producer_to_find = intval($_REQUEST['producer_id']);
                }
                if(isset($_REQUEST['product_id']) && $_REQUEST['product_id'] != "0"){
                    $product_to_find = intval($_REQUEST['product_id']);
                }
                if(isset($_REQUEST['min']) && $_REQUEST['min'] != "" && intval($_REQUEST['min']) != 0){
                    $min = intval($_REQUEST['min']);
                }
                if(isset($_REQUEST['max']) && $_REQUEST['min'] != "" && intval($_REQUEST['max']) != 0){
                    $max = intval($_REQUEST['max']);
                }


                if($producer_to_find == 0 && $product_to_find == 0){
                    if($distance > $min && $distance < $max){
                        array_push($allCrops, $crop);
                    }
                }else if($producer_to_find == 0 && $product_to_find != 0){
                    if($distance > $min && $distance < $max && $crop->getProduct()->getId() == $product_to_find){
                        array_push($allCrops, $crop);
                    }
                }else if($producer_to_find != 0 && $product_to_find == 0){
                    if($distance > $min && $distance < $max && $crop->getProducer()->getId() == $producer_to_find){
                        array_push($allCrops, $crop);
                    }
                }else if($producer_to_find != 0 && $product_to_find != 0){
                    if($distance > $min && $distance  < $max && $crop->getProducer()->getId() == $producer_to_find && $crop->getProduct()->getId() == $product_to_find){
                        array_push($allCrops, $crop);
                    }
                }
            }

            foreach($allCrops as $crop){
                $distance = round($this->distance($this->getUser()->getRegistrationLat(), $this->getUser()->getRegistrationLon(), $crop->getProducer()->getRegistrationLat(), $crop->getProducer()->getRegistrationLon(), "K"), 2);

                if(!array_key_exists( $crop->getProducer()->getId(),$infoArray)){
                    $infoArray[$crop->getProducer()->getId()] = '<div class="info_line"><div class="crop_image"></div><div class="crop_info">'.$crop->getProduct()->getDescription().' by '.$crop->getProducer()->getUsername().' at '.$crop->getPrice().'€ / '.$crop->getProduct()->getBaseUnit().' ('.$distance.')</div><div class="crop_make_offer"><div style="float:right;" id="make_offer_button_'.$crop->getId().'" class="editButton" onclick="makeOffer('.$crop->getId().')"><i class="fa fa-plus" aria-hidden="true" style="margin:0px"></i></div></div></div>';
                }else{
                    $infoArray[$crop->getProducer()->getId()] .= '<div class="info_line"><div class="crop_image"></div><div class="crop_info">'.$crop->getProduct()->getDescription().' by '.$crop->getProducer()->getUsername().' at '.$crop->getPrice().'€ / '.$crop->getProduct()->getBaseUnit().' ('.$distance.')</div><div class="crop_make_offer"><div style="float:right;" id="make_offer_button_'.$crop->getId().'" class="editButton" onclick="makeOffer('.$crop->getId().')"><i class="fa fa-plus" aria-hidden="true" style="margin:0px"></i></div></div></div>';
                }
            }

            $query = $em->createQuery('SELECT p FROM AppBundle:AgUser p WHERE p.accountType = 1');
            $allProducers = $query->getResult();

            foreach($allCrops_ as $crop){

                $obj = new \stdClass();

                $obj->id = $crop->getId();
                $obj->producer = '<div class="username_" onclick="getSelectedUser('.$crop->getProducer()->getId().')">'.$crop->getProducer()->getUsername().'</div>';
                $obj->distance = round($this->distance($this->getUser()->getRegistrationLat(), $this->getUser()->getRegistrationLon(), $crop->getProducer()->getRegistrationLat(), $crop->getProducer()->getRegistrationLon(), "K"), 2)." Km";
                $obj->cropProduct = $crop->getProduct()->getDescription();
                $obj->cropPD = date_format($crop->getProducedDate(), 'Y-m-d H:i:s');
                $obj->cropED = date_format($crop->getExpirationDate(), 'Y-m-d H:i:s');
                $obj->amount = floatval($crop->getAmount()) - floatval($crop->getOnhold());
                $obj->price = $crop->getPrice()."€ / ".$crop->getProduct()->getBaseUnit();

                $now = new \DateTime();
                $actions = '<div style="float:right;" id="make_offer_button_'.$crop->getId().'" class="editButton" onclick="makeOffer('.$crop->getId().')"><i class="fa fa-plus" aria-hidden="true" style="margin:0px"></i></div>';

                if($now > $crop->getExpirationDate()){
                    $actions = "<red>This crop has expired</red>";

                }



                $obj->edit = $actions;
                array_push($cropsArray, $obj);
            }


            return $this->render('default/dashboard_buis.html.twig',
                array(
                    "avatar" => $this->getUser()->getAvatarUrl(),
                    "username" => $this->getUser()->getUsername(),
                    "offers" => $allOffers,
                    "crops" => $allCrops,
                    "products" => $Allproducts,
                    "producers" => $allProducers,
                    "info" => $infoArray,
                    'offers_json' => json_encode($offersArray),
                    'crops_json' => json_encode($cropsArray),
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
                $obj->totalAmount = floatval($crop->getAmount()) - floatval($crop->getOnhold());
                $obj->reserve = floatval($crop->getOnhold());
                $obj->price = $crop->getPrice();

                $now = new \DateTime();
                $actions = '<div style="float:right;" id="edit_button_'.$crop->getId().'" class="editButton" onclick="displayProduct('.$crop->getId().')"><i class="fa fa-edit" aria-hidden="true" style="margin:0px"></i></div>';
                $actions .= '<div style="float:right;" id="delete_button_'.$crop->getId().'" class="deleteButton" onclick="deleteCrop('.$crop->getId().')"><i class="fa fa-trash-o" aria-hidden="true" style="margin:0px"></i></div>';

                if($now > $crop->getExpirationDate()){
                    $actions = "<red>This crop has expired</red>";
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
     * @Route("/deleteCrop", name="deleteCrop")
     */
    public function deleteCropAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p FROM AppBundle:AgCrop p WHERE p.id = :oid'
        )->setParameter('oid', $_REQUEST['crop_id']);
        $crop = $query->getResult()[0];

        $em->remove($crop);
        $em->flush();

        return $this->getSuccessResponse("1", "Crop Deleted");
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

    /**
     * @Route("/uploadFile", name="uploadFile")
     */
    public function uploadFileAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p FROM AppBundle:AgUser p WHERE p.username = :username'
        )->setParameter('username', $_REQUEST['username_toSearch']);
        $user = $query->getResult()[0];

        $query = $em->createQuery(
            'SELECT p FROM AppBundle:AgCrop p WHERE p.id = :crop_id'
        )->setParameter('crop_id', $_REQUEST['crop_id']);
        $crop = $query->getResult()[0];


        $info = pathinfo($_FILES['crop_asset']['name']);
        $ext = $info['extension']; // get the extension of the file
        $filename = $info['filename'];
        $filename = str_replace(")","_",$filename);
        $filename = str_replace("(","_",$filename);

        $newname = $filename . "." . $ext;


        if (!file_exists('/var/www/html/agrotis_assets/' . $this->getUser()->getId())) {
            mkdir('/var/www/html/agrotis_assets/' . $this->getUser()->getId(), 0777, true);
        }
        $target = '/var/www/html/agrotis_assets/' . $this->getUser()->getId() . "/" . $newname;
        move_uploaded_file($_FILES['atAsset']['tmp_name'], $target);
        $dbURL = $newname;

        $dbURL_store = "http://" . $_SERVER['SERVER_ADDR'] . "/agrotis_assets/" . $this->getUser()->getId() . "/" . $dbURL;

        $asset = new AgCropAsset();
        $asset->setProducer($user);
        $asset->setCrop($crop);
        $asset->setSize($_REQUEST['file_size']);
        $asset->setUrl($dbURL_store);

        $em->persist($asset);
        $em->flush();

        return $this->getSuccessResponse("1", "Image Uploaded");
    }


    /**
     * @Route("/getCrop", name="getCrop")
     */
    public function getCropAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT p FROM AppBundle:AgCrop p WHERE p.id = :crop_id'
        )->setParameter('crop_id', $_REQUEST['crop_id']);
        $crop = $query->getResult()[0];

        return $this->displayXML($this->getCropAsXML($crop));
    }

    /**
     * @Route("/getCrops", name="getCrops")
     */
    public function getCropsAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT p FROM AppBundle:AgCrop p'
        );
        $crop = $query->getResult();

        return $this->displayXML($this->getCropsAsXML($crop));
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

    function getCropAsXML($crop)
    {
        $rootNode = new \SimpleXMLElement('<Crops></Crops>');


        $itemNode = $rootNode->addChild('Crop');
        $itemNode->addAttribute('id', $crop->getId());
        $itemNode->addAttribute('producer_username', $crop->getProducer()->getUsername());
        $itemNode->addAttribute('producer_id', $crop->getProducer()->getId());
        $itemNode->addAttribute('product_description', $crop->getProduct()->getDescription());
        $itemNode->addAttribute('product_id', $crop->getProduct()->getId());
        $itemNode->addAttribute('price', $crop->getPrice());
        $itemNode->addAttribute('amount', $crop->getAmount());
        $itemNode->addAttribute('on_hold', $crop->getOnhold());
        $itemNode->addAttribute('description', $crop->getDescription());
        $itemNode->addAttribute('pDate', date_format($crop->getProducedDate(), 'Y-m-d H:i:s'));
        $itemNode->addAttribute('eDate', date_format($crop->getExpirationDate(), 'Y-m-d H:i:s'));


        return $rootNode;

    }

    function getCropsAsXML($crops)
    {
        $rootNode = new \SimpleXMLElement('<Crops></Crops>');

        foreach($crops as $crop){
            $itemNode = $rootNode->addChild('Crop');
            $itemNode->addAttribute('id', $crop->getId());
            $itemNode->addAttribute('producer_username', $crop->getProducer()->getUsername());
            $itemNode->addAttribute('producer_id', $crop->getProducer()->getId());
            $itemNode->addAttribute('product_description', $crop->getProduct()->getDescription());
            $itemNode->addAttribute('product_id', $crop->getProduct()->getId());
            $itemNode->addAttribute('price', $crop->getPrice());
            $itemNode->addAttribute('amount', $crop->getAmount());
            $itemNode->addAttribute('on_hold', $crop->getOnhold());
            $itemNode->addAttribute('description', $crop->getDescription());
            $itemNode->addAttribute('pDate', date_format($crop->getProducedDate(), 'Y-m-d H:i:s'));
            $itemNode->addAttribute('eDate', date_format($crop->getExpirationDate(), 'Y-m-d H:i:s'));
        }




        return $rootNode;

    }

    function distance($lat1, $lon1, $lat2, $lon2, $unit) {

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }



}
