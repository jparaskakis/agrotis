<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgProducerProduct
 */
class AgProducerProduct
{
    /**
     * @var float
     */
    private $price;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var \DateTime
     */
    private $producedDate;

    /**
     * @var \DateTime
     */
    private $expirationDate;

    /**
     * @var integer
     */
    private $onhold;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\AgProduct
     */
    private $product;

    /**
     * @var \AppBundle\Entity\AgUser
     */
    private $producer;


    /**
     * Set price
     *
     * @param float $price
     * @return AgProducerProduct
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
     * Set amount
     *
     * @param float $amount
     * @return AgProducerProduct
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
     * Set producedDate
     *
     * @param \DateTime $producedDate
     * @return AgProducerProduct
     */
    public function setProducedDate($producedDate)
    {
        $this->producedDate = $producedDate;

        return $this;
    }

    /**
     * Get producedDate
     *
     * @return \DateTime 
     */
    public function getProducedDate()
    {
        return $this->producedDate;
    }

    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     * @return AgProducerProduct
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime 
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set onhold
     *
     * @param integer $onhold
     * @return AgProducerProduct
     */
    public function setOnhold($onhold)
    {
        $this->onhold = $onhold;

        return $this;
    }

    /**
     * Get onhold
     *
     * @return integer 
     */
    public function getOnhold()
    {
        return $this->onhold;
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
     * Set product
     *
     * @param \AppBundle\Entity\AgProduct $product
     * @return AgProducerProduct
     */
    public function setProduct(\AppBundle\Entity\AgProduct $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\AgProduct 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set producer
     *
     * @param \AppBundle\Entity\AgUser $producer
     * @return AgProducerProduct
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
}
