<?php

namespace Brickstorm\WorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brickstorm\WorldBundle\Entity\LocationType
 */
class LocationType
{
    protected $locale;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var Brickstorm\WorldBundle\Entity\Location
     */
    private $locations;

    public function __construct()
    {
        $this->locations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add locations
     *
     * @param Brickstorm\WorldBundle\Entity\Location $locations
     */
    public function addLocation(\Brickstorm\WorldBundle\Entity\Location $locations)
    {
        $this->locations[] = $locations;
    }

    /**
     * Get locations
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLocations()
    {
        return $this->locations;
    }
}