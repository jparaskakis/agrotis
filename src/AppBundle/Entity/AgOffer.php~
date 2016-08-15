<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgOffer
 */
class AgOffer
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $cdate;

    /**
     * @var \DateTime
     */
    private $rdate;

    /**
     * @var integer
     */
    private $isAccepted;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\AgUser
     */
    private $producer;

    /**
     * @var \AppBundle\Entity\AgCrop
     */
    private $crop;

    /**
     * @var \AppBundle\Entity\AgUser
     */
    private $business;


    /**
     * Set amount
     *
     * @param float $amount
     * @return AgOffer
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return AgOffer
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return AgOffer
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set cdate
     *
     * @param \DateTime $cdate
     * @return AgOffer
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
     * Set rdate
     *
     * @param \DateTime $rdate
     * @return AgOffer
     */
    public function setRdate($rdate)
    {
        $this->rdate = $rdate;

        return $this;
    }

    /**
     * Get rdate
     *
     * @return \DateTime 
     */
    public function getRdate()
    {
        return $this->rdate;
    }

    /**
     * Set isAccepted
     *
     * @param integer $isAccepted
     * @return AgOffer
     */
    public function setIsAccepted($isAccepted)
    {
        $this->isAccepted = $isAccepted;

        return $this;
    }

    /**
     * Get isAccepted
     *
     * @return integer 
     */
    public function getIsAccepted()
    {
        return $this->isAccepted;
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
     * Set producer
     *
     * @param \AppBundle\Entity\AgUser $producer
     * @return AgOffer
     */
    public function setProducer(\AppBundle\Entity\AgUser $producer = null)
    {
        $this->producer = $producer;

        return $this;
    }

    /**
     * Get producer
     *
     * @return \AppBundle\Entity\AgUser 
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * Set crop
     *
     * @param \AppBundle\Entity\AgCrop $crop
     * @return AgOffer
     */
    public function setCrop(\AppBundle\Entity\AgCrop $crop = null)
    {
        $this->crop = $crop;

        return $this;
    }

    /**
     * Get crop
     *
     * @return \AppBundle\Entity\AgCrop 
     */
    public function getCrop()
    {
        return $this->crop;
    }

    /**
     * Set business
     *
     * @param \AppBundle\Entity\AgUser $business
     * @return AgOffer
     */
    public function setBusiness(\AppBundle\Entity\AgUser $business = null)
    {
        $this->business = $business;

        return $this;
    }

    /**
     * Get business
     *
     * @return \AppBundle\Entity\AgUser 
     */
    public function getBusiness()
    {
        return $this->business;
    }
}
