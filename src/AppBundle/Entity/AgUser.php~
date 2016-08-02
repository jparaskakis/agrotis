<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Document\User as BaseUser;

/**
 * AgUser
 */
class AgUser extends BaseUser
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $qtKey;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var \DateTime
     */
    protected $cdate;

    /**
     * @var string
     */
    protected $verificationCode;

    /**
     * @var integer
     */
    protected $activated;

    /**
     * @var string
     */
    protected $usernameCanonical;

    /**
     * @var string
     */
    protected $emailCanonical;

    /**
     * @var string
     */
    protected $avatar;

    /**
     * @var boolean
     */
    protected $enabled;

    /**
     * @var string
     */
    protected $salt;

    /**
     * @var \DateTime
     */
    protected $lastLogin;

    /**
     * @var boolean
     */
    protected $locked;

    /**
     * @var boolean
     */
    protected $expired;

    /**
     * @var \DateTime
     */
    protected $expiresAt;

    /**
     * @var string
     */
    protected $confirmationToken;

    /**
     * @var \DateTime
     */
    protected $passwordRequestedAt;

    /**
     * @var string
     */
    protected $roles;

    /**
     * @var boolean
     */
    protected $credentialsExpired;

    /**
     * @var \DateTime
     */
    protected $credentialsExpireAt;

    /**
     * @var string
     */
    protected $passwordPlaintext;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $registerIp;

    /**
     * @var integer
     */
    protected $points;

    /**
     * @var string
     */
    protected $userPointsMeta;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \AppBundle\Entity\AgUserGroup
     */
    protected $accountType;

    /**
     * @var \AppBundle\Entity\AgUserGroup
     */
    protected $secondaryAccountType;


    /**
     * Set username
     *
     * @param string $username
     * @return AgUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return AgUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }


    /**
     * Set email
     *
     * @param string $email
     * @return AgUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set cdate
     *
     * @param \DateTime $cdate
     * @return AgUser
     */
    public function setCdate($cdate)
    {
        $this->cdate = $cdate;

        return $this;
    }

    /**
     * Get cdate
     *
     * @return \DateTime
     */
    public function getCdate()
    {
        return $this->cdate;
    }

    /**
     * Set verificationCode
     *
     * @param string $verificationCode
     * @return AgUser
     */
    public function setVerificationCode($verificationCode)
    {
        $this->verificationCode = $verificationCode;

        return $this;
    }

    /**
     * Get verificationCode
     *
     * @return string
     */
    public function getVerificationCode()
    {
        return $this->verificationCode;
    }

    /**
     * Set activated
     *
     * @param integer $activated
     * @return AgUser
     */
    public function setActivated($activated)
    {
        $this->activated = $activated;

        return $this;
    }

    /**
     * Get activated
     *
     * @return integer
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * Set usernameCanonical
     *
     * @param string $usernameCanonical
     * @return AgUser
     */
    public function setUsernameCanonical($usernameCanonical)
    {
        $this->usernameCanonical = $usernameCanonical;

        return $this;
    }

    /**
     * Get usernameCanonical
     *
     * @return string
     */
    public function getUsernameCanonical()
    {
        return $this->usernameCanonical;
    }

    /**
     * Set emailCanonical
     *
     * @param string $emailCanonical
     * @return AgUser
     */
    public function setEmailCanonical($emailCanonical)
    {
        $this->emailCanonical = $emailCanonical;

        return $this;
    }

    /**
     * Get emailCanonical
     *
     * @return string
     */
    public function getEmailCanonical()
    {
        return $this->emailCanonical;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return AgUser
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return AgUser
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return AgUser
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     * @return AgUser
     */
    public function setLastLogin(\DateTime $time = null)
    {
        $this->lastLogin = $time;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set locked
     *
     * @param boolean $locked
     * @return AgUser
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set expired
     *
     * @param boolean $expired
     * @return AgUser
     */
    public function setExpired($expired)
    {
        $this->expired = $expired;

        return $this;
    }

    /**
     * Get expired
     *
     * @return boolean
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * Set expiresAt
     *
     * @param \DateTime $expiresAt
     * @return AgUser
     */
    public function setExpiresAt(\DateTime $time = null)
    {
        $this->expiresAt = $time;

        return $this;
    }

    /**
     * Get expiresAt
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Set confirmationToken
     *
     * @param string $confirmationToken
     * @return AgUser
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }

    /**
     * Get confirmationToken
     *
     * @return string
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * Set passwordRequestedAt
     *
     * @param \DateTime $passwordRequestedAt
     * @return AgUser
     */
    public function setPasswordRequestedAt(\DateTime $date = null)
    {
        $this->passwordRequestedAt = $date;

        return $this;
    }

    /**
     * Get passwordRequestedAt
     *
     * @return \DateTime
     */
    public function getPasswordRequestedAt()
    {
        return $this->passwordRequestedAt;
    }

    /**
     * Set roles
     *
     * @param string $roles
     * @return AgUser
     */
    public function setRoles(array $roles)
    {
        //$this->roles = $roles;
        $this->roles = "[USER_OK]";
        return $this;
    }

    /**
     * Get roles
     *
     * @return string
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set credentialsExpired
     *
     * @param boolean $credentialsExpired
     * @return AgUser
     */
    public function setCredentialsExpired($credentialsExpired)
    {
        $this->credentialsExpired = $credentialsExpired;

        return $this;
    }

    /**
     * Get credentialsExpired
     *
     * @return boolean
     */
    public function getCredentialsExpired()
    {
        return $this->credentialsExpired;
    }

    /**
     * Set credentialsExpireAt
     *
     * @param \DateTime $credentialsExpireAt
     * @return AgUser
     */
    public function setCredentialsExpireAt(\DateTime $time = null)
    {
        $this->credentialsExpireAt = $time;

        return $this;
    }

    /**
     * Get credentialsExpireAt
     *
     * @return \DateTime
     */
    public function getCredentialsExpireAt()
    {
        return $this->credentialsExpireAt;
    }




    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }







    /**
     * Set accountType
     *
     * @param \AppBundle\Entity\AgUsergroup $accountType
     * @return AgUser
     */
    public function setAccountType(\AppBundle\Entity\AgUsergroup $accountType = null)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Get accountType
     *
     * @return \AppBundle\Entity\AgUsergroup 
     */
    public function getAccountType()
    {
        return $this->accountType;
    }
    /**
     * @var string
     */
    private $avatarUrl;

    /**
     * @var float
     */
    private $registrationLat;

    /**
     * @var float
     */
    private $registrationLon;


    /**
     * Set avatarUrl
     *
     * @param string $avatarUrl
     * @return AgUser
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;

        return $this;
    }

    /**
     * Get avatarUrl
     *
     * @return string 
     */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    /**
     * Set registrationLat
     *
     * @param float $registrationLat
     * @return AgUser
     */
    public function setRegistrationLat($registrationLat)
    {
        $this->registrationLat = $registrationLat;

        return $this;
    }

    /**
     * Get registrationLat
     *
     * @return float 
     */
    public function getRegistrationLat()
    {
        return $this->registrationLat;
    }

    /**
     * Set registrationLon
     *
     * @param float $registrationLon
     * @return AgUser
     */
    public function setRegistrationLon($registrationLon)
    {
        $this->registrationLon = $registrationLon;

        return $this;
    }

    /**
     * Get registrationLon
     *
     * @return float 
     */
    public function getRegistrationLon()
    {
        return $this->registrationLon;
    }
}
