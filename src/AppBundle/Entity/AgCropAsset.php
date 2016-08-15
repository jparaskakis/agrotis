<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgCropAsset
 */
class AgCropAsset
{
    /**
     * @var integer
     */
    private $producer;

    /**
     * @var integer
     */
    private $crop;

    /**
     * @var string
     */
    private $url;

    /**
     * @var float
     */
    private $size;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set producer
     *
     * @param integer $producer
     * @return AgCropAsset
     */
    public function setProducer($producer)
    {
        $this->producer = $producer;

        return $this;
    }

    /**
     * Get producer
     *
     * @return integer 
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * Set crop
     *
     * @param integer $crop
     * @return AgCropAsset
     */
    public function setCrop($crop)
    {
        $this->crop = $crop;

        return $this;
    }

    /**
     * Get crop
     *
     * @return integer 
     */
    public function getCrop()
    {
        return $this->crop;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return AgCropAsset
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set size
     *
     * @param float $size
     * @return AgCropAsset
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return float 
     */
    public function getSize()
    {
        return $this->size;
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
}
