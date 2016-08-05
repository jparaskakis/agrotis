<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgCropReview
 */
class AgCropReview
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
     * @var \AppBundle\Entity\AgCrop
     */
    private $crop;


    /**
     * Set description
     *
     * @param string $description
     * @return AgCropReview
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
     * @return AgCropReview
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
     * @return AgCropReview
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
     * @return AgCropReview
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
     * @return AgCropReview
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
     * Set crop
     *
     * @param \AppBundle\Entity\AgCrop $crop
     * @return AgCropReview
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
}
