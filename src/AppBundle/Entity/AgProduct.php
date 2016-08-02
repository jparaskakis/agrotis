<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgProduct
 */
class AgProduct
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $baseUnit;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set description
     *
     * @param string $description
     * @return AgProduct
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
     * Set baseUnit
     *
     * @param string $baseUnit
     * @return AgProduct
     */
    public function setBaseUnit($baseUnit)
    {
        $this->baseUnit = $baseUnit;

        return $this;
    }

    /**
     * Get baseUnit
     *
     * @return string 
     */
    public function getBaseUnit()
    {
        return $this->baseUnit;
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
