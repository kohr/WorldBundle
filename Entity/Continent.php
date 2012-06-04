<?php

namespace Brickstorm\WorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brickstorm\WorldBundle\Entity\Continent
 */
class Continent
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var Brickstorm\WorldBundle\Entity\Country
     */
    private $country;

    public function __construct()
    {
        $this->country = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add country
     *
     * @param Brickstorm\WorldBundle\Entity\Country $country
     */
    public function addCountry(\Brickstorm\WorldBundle\Entity\Country $country)
    {
        $this->country[] = $country;
    }

    /**
     * Get country
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCountry()
    {
        return $this->country;
    }
}