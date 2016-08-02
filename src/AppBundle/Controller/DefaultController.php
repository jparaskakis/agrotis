<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

        return $this->render('default/dashboard.html.twig');
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



}
