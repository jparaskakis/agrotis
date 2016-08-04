<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgProducerProductReview
 */
class AgProducerProductReview
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var float
     */
    private $score;

    /**
     * @var \DateTime
     */
    private $cdate;

    /**
     * @var integer
     */
    private $hidden;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\AgUser
     */
    private $reviewer;

    /**
     * @var \AppBundle\Entity\AgProducerProduct
     */
    private $producerProduct;


    /**
     * Set description
     *
     * @param string $description
     * @return AgProducerProductReview
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set score
     *
     * @param float $score
     * @return AgProducerProductReview
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return float 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set cdate
     *
     * @param \DateTime $cdate
     * @return AgProducerProductReview
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
     * Set hidden
     *
     * @param integer $hidden
     * @return AgProducerProductReview
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return integer 
     */
    public function getHidden()
    {
        return $this->hidden;
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
     * Set reviewer
     *
     * @param \AppBundle\Entity\AgUser $reviewer
     * @return AgProducerProductReview
     */
    public function setReviewer(\AppBundle\Entity\AgUser $reviewer = null)
    {
        $this->reviewer = $reviewer;

        return $this;
    }

    /**
     * Get reviewer
     *
     * @return \AppBundle\Entity\AgUser 
     */
    public function getReviewer()
    {
        return $this->reviewer;
    }

    /**
     * Set producerProduct
     *
     * @param \AppBundle\Entity\AgProducerProduct $producerProduct
     * @return AgProducerProductReview
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
}
