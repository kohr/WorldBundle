<?php

namespace Brickstorm\WorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brickstorm\WorldBundle\Entity\City
 */
class City
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
     * @var integer $population
     */
    private $population;

    /**
     * @var float $latitude
     */
    private $latitude;

    /**
     * @var float $longitude
     */
    private $longitude;

    /**
     * @var date $created_at
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     */
    private $updated_at;

    /**
     * @var Brickstorm\WorldBundle\Entity\Province
     */
    private $province;

    /**
     * @var Brickstorm\WorldBundle\Entity\Country
     */
    private $country;

    /**
     * @var Brickstorm\WorldBundle\Entity\City
     */
    private $parent;


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
     * Set population
     *
     * @param integer $population
     */
    public function setPopulation($population)
    {
        $this->population = $population;
    }

    /**
     * Get population
     *
     * @return integer 
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set created_at
     *
     * @param date $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return date 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set province
     *
     * @param Brickstorm\WorldBundle\Entity\Province $province
     */
    public function setProvince(\Brickstorm\WorldBundle\Entity\Province $province)
    {
        $this->province = $province;
    }

    /**
     * Get province
     *
     * @return Brickstorm\WorldBundle\Entity\Province 
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set country
     *
     * @param Brickstorm\WorldBundle\Entity\Country $country
     */
    public function setCountry(\Brickstorm\WorldBundle\Entity\Country $country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return Brickstorm\WorldBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set parent
     *
     * @param Brickstorm\WorldBundle\Entity\City $parent
     */
    public function setParent(\Brickstorm\WorldBundle\Entity\City $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return Brickstorm\WorldBundle\Entity\City 
     */
    public function getParent()
    {
        return $this->parent;
    }
}