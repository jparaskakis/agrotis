<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 11/18/2015
 * Time: 11:43 AM
 */

namespace AppBundle\Controller\Api;

use AppBundle\Entity\AgUser;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;




class UserController extends Controller
{

    /**
     * @Route("/api/createUser", name="createUser_")
     * @Template()
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
            'SELECT p FROM AppBundle:QtUser p WHERE p.usernameCanonical = :username OR p.email = :email'
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







    function getUserAsXML($user, $isLogedIn)
    {
        $em = $this->getDoctrine()->getManager();

        $rootNode = new \SimpleXMLElement('<Users></Users>');


        $itemNode = $rootNode->addChild('User');
        $itemNode->addAttribute('id', $user->getId());
        $itemNode->addAttribute('accountType', $user->getAccountType()->getDescription());
        $itemNode->addAttribute('username', $user->getUsername());
        if ($isLogedIn) {
            $itemNode->addAttribute('masterKey', $user->getQtKey());
        } else {
            $itemNode->addAttribute('masterKey', "***************************");
        }
        $itemNode->addAttribute('email', $user->getEmail());
        $itemNode->addAttribute('activated', $user->getActivated());
        $itemNode->addAttribute('cdate', date_format($user->getCdate(), 'Y-m-d H:i:s'));


        $query = $em->createQuery(
            'SELECT p FROM AppBundle:QtUserInfo p WHERE p.user = :uid'
        )->setParameter('uid', $user->getId());
        $info = $query->getResult()[0];

        $infoNode = $itemNode->addChild('UserInfo');
        $infoNode->addAttribute('fname', $info->getFname());
        $infoNode->addAttribute('lname', $info->getLname());
        $itemNode->addAttribute('avatar', $info->getAvatar());
        $infoNode->addAttribute('address1', $info->getAddress1());
        $infoNode->addAttribute('address2', $info->getAddress2());
        $infoNode->addAttribute('address3', $info->getAddress3());
        $infoNode->addAttribute('zipcode', $info->getZipcode());
        $infoNode->addAttribute('state_country', $info->getStateCountry());
        $infoNode->addAttribute('city', $info->getCity());
        $infoNode->addAttribute('country_code', $info->getCountryCode());
        $infoNode->addAttribute('ranking', $info->getRanking());

        $socialNode = $infoNode->addChild('Social');
        $socialNode->addAttribute('website', $info->getWebsite());
        $socialNode->addAttribute('facebook', $info->getFacebook());
        $socialNode->addAttribute('linkedin', $info->getLinkedin());
        $socialNode->addAttribute('twitter', $info->getTwitter());
        $socialNode->addAttribute('youtube', $info->getYoutube());
        $socialNode->addAttribute('vimeo', $info->getVimeo());
        $socialNode->addAttribute('googleplus', $info->getGoogleplus());

        $organizationNode = $infoNode->addChild('Organization');
        $organizationNode->addAttribute('org_name', $info->getOrgName());
        $organizationNode->addAttribute('org_address', $info->getOrgAddress());
        $organizationNode->addAttribute('org_state_country', $info->getOrgStateCountry());
        $organizationNode->addAttribute('org_country_code', $info->getOrgCountryCode());

        $query = $em->createQuery(
            'SELECT p FROM AppBundle:QtUserProfile p WHERE p.user = :uid'
        )->setParameter('uid', $user->getId());
        $user_profile = $query->getResult()[0];

        $profileNode = $itemNode->addChild('Profile');
        $profileNode->addAttribute('short_cv', $user_profile->getShortCv());
        $profileNode->addAttribute('long_cv', $user_profile->getLongCv());
        $profileNode->addAttribute('cv_url', $user_profile->getCvUrl());

        $query = $em->createQuery(
            'SELECT p FROM AppBundle:QtUserAsset p WHERE p.user = :uid'
        )->setParameter('uid', $user->getId());
        $user_assets = $query->getResult();

        $assetsNode = $itemNode->addChild('Assets');
        foreach ($user_assets as $asset) {

            $aNode = $assetsNode->addChild('Asset');
            $aNode->addAttribute('id', $asset->getId());
            $aNode->addAttribute('mediaType', $asset->getMediaType());
            $aNode->addAttribute('mediaUrl', $asset->getMediaUrl());
            $aNode->addAttribute('visibility', $asset->getVisibility());
        }


        return $rootNode;

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
        $itemNode->addAttribute('masterKey', $user->getQtKey());

        $itemNode->addAttribute('email', $user->getEmail());
        $itemNode->addAttribute('activated', $user->getActivated());
        $itemNode->addAttribute('cdate', date_format($user->getCdate(), 'Y-m-d H:i:s'));


        $query = $em->createQuery(
            'SELECT p FROM AppBundle:QtUserInfo p WHERE p.user = :uid'
        )->setParameter('uid', $user->getId());
        $info = $query->getResult()[0];

        $infoNode = $itemNode->addChild('UserInfo');
        $infoNode->addAttribute('fname', $info->getFname());
        $infoNode->addAttribute('lname', $info->getLname());
        $itemNode->addAttribute('avatar', $info->getAvatar());
        $infoNode->addAttribute('address1', $info->getAddress1());
        $infoNode->addAttribute('address2', $info->getAddress2());
        $infoNode->addAttribute('address3', $info->getAddress3());
        $infoNode->addAttribute('zipcode', $info->getZipcode());
        $infoNode->addAttribute('state_country', $info->getStateCountry());
        $infoNode->addAttribute('city', $info->getCity());
        $infoNode->addAttribute('country_code', $info->getCountryCode());
        $infoNode->addAttribute('ranking', $info->getRanking());

        $socialNode = $infoNode->addChild('Social');
        $socialNode->addAttribute('website', $info->getWebsite());
        $socialNode->addAttribute('facebook', $info->getFacebook());
        $socialNode->addAttribute('linkedin', $info->getLinkedin());
        $socialNode->addAttribute('twitter', $info->getTwitter());
        $socialNode->addAttribute('youtube', $info->getYoutube());
        $socialNode->addAttribute('vimeo', $info->getVimeo());
        $socialNode->addAttribute('googleplus', $info->getGoogleplus());


        $query = $em->createQuery(
            'SELECT p FROM AppBundle:QtUserProfile p WHERE p.user = :uid'
        )->setParameter('uid', $user->getId());
        $user_profile = $query->getResult()[0];

        $profileNode = $itemNode->addChild('Profile');
        $profileNode->addAttribute('short_cv', $user_profile->getShortCv());
        $profileNode->addAttribute('long_cv', $user_profile->getLongCv());
        $profileNode->addAttribute('cv_url', $user_profile->getCvUrl());

        $query = $em->createQuery(
            'SELECT p FROM AppBundle:QtUserAsset p WHERE p.user = :uid'
        )->setParameter('uid', $user->getId());
        $user_assets = $query->getResult();

        $assetsNode = $itemNode->addChild('Assets');
        foreach ($user_assets as $asset) {

            $aNode = $assetsNode->addChild('Asset');
            $aNode->addAttribute('id', $asset->getId());
            $aNode->addAttribute('mediaType', $asset->getMediaType());
            $aNode->addAttribute('mediaUrl', $asset->getMediaUrl());
            $aNode->addAttribute('visibility', $asset->getVisibility());
            $aNode->addAttribute('type', $asset->getType());

        }



        $query = $em->createQuery(
            'SELECT p FROM AppBundle:QtUserBadge p WHERE p.user = :uid  ORDER BY p.orderId ASC'
        )->setParameter('uid', $user->getId());
        $user_badges = $query->getResult();

        $badgesNode = $itemNode->addChild('Badges');
        foreach ($user_badges as $badge) {

            $aNode = $badgesNode->addChild('Badge');
            $aNode->addAttribute('id', $badge->getId());
            $aNode->addAttribute('order', $badge->getOrderId());
            $aNode->addAttribute('hidden', $badge->getHidden());
            $aNode->addAttribute('title', $badge->getBadge()->getTitle());
            $aNode->addAttribute('short_desc', $badge->getBadge()->getShortDescription());
            $aNode->addAttribute('image', $badge->getBadge()->getImage());

        }

        $query = $em->createQuery(
            'SELECT p FROM AppBundle:QtProject p WHERE p.initiator = :uid AND p.visible = :vis'
        )->setParameter('uid', $user->getId())->setParameter('vis', '1');
        $projects = $query->getResult();
        $profileNode = $itemNode->addChild('Projects');
        foreach ($projects as $proj) {

            $prNode = $profileNode->addChild('Project');
            $prNode->addAttribute('id', $proj->getId());
            $prNode->addAttribute('title', $proj->getTitle());
            $prNode->addAttribute('icon', $proj->getIcon());
        }


        return $rootNode;

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