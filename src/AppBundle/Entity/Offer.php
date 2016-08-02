<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offer
 */
class Offer
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
     * @var \AppBundle\Entity\AgProducerProduct
     */
    private $producerProduct;

    /**
     * @var \AppBundle\Entity\AgUser
     */
    private $user;


    /**
     * Set amount
     *
     * @param float $amount
     * @return Offer
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
     * @return Offer
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
     * @return Offer
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
     * @return Offer
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
     * @return Offer
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
     * @return Offer
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
     * Set producerProduct
     *
     * @param \AppBundle\Entity\AgProducerProduct $producerProduct
     * @return Offer
     */
    public function setProducerProduct(\AppBundle\Entity\AgProducerProduct $producerProduct = null)
    {
        $this->producerProduct = $producerProduct;

        return $this;
    }

    /**
     * Get producerProduct
     *
     * @return \AppBundle\Entity\AgProducerProduct 
     */
    public function getProducerProduct()
    {
        return $this->producerProduct;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\AgUser $user
     * @return Offer
     */
    public function setUser(\AppBundle\Entity\AgUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\AgUser 
     */
    public function getUser()
    {
        return $this->user;
    }
}
