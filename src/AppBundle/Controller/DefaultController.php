<?php

namespace AppBundle\Controller;

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
            return $this->render('default/dashboard_prod.html.twig',
                array(
                    "avatar" => $this->getUser()->getAvatarUrl(),
                    "username" => $this->getUser()->getUsername(),
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
        $newUser->setAvatar('http://62.210.36.88/agrotis/public_assets/avatar.jpg');


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



}
