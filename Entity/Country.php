<?php

namespace Brickstorm\WorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brickstorm\WorldBundle\Entity\Country
 */
class Country
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
     * @var string $code
     */
    private $code;

    /**
     * @var integer $population
     */
    private $population;

    /**
     * @var string $borders
     */
    private $borders;

    /**
     * @var Brickstorm\WorldBundle\Entity\City
     */
    private $capital;

    /**
     * @var Brickstorm\WorldBundle\Entity\Country
     */
    private $children;

    /**
     * @var Brickstorm\WorldBundle\Entity\Country
     */
    private $nearby;

    /**
     * @var Brickstorm\WorldBundle\Entity\Country
     */
    private $parent;

    /**
     * @var Brickstorm\WorldBundle\Entity\Continent
     */
    private $continent;

    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    $this->nearby = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set code
     *
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
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
     * Set borders
     *
     * @param string $borders
     */
    public function setBorders($borders)
    {
        $this->borders = $borders;
    }

    /**
     * Get borders
     *
     * @return string 
     */
    public function getBorders()
    {
        return $this->borders;
    }

    /**
     * Set capital
     *
     * @param Brickstorm\WorldBundle\Entity\City $capital
     */
    public function setCapital(\Brickstorm\WorldBundle\Entity\City $capital)
    {
        $this->capital = $capital;
    }

    /**
     * Get capital
     *
     * @return Brickstorm\WorldBundle\Entity\City 
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Add children
     *
     * @param Brickstorm\WorldBundle\Entity\Country $children
     */
    public function addCountry(\Brickstorm\WorldBundle\Entity\Country $children)
    {
        $this->children[] = $children;
    }

    /**
     * Get children
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Get nearby
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getNearby()
    {
        return $this->nearby;
    }

    /**
     * Set parent
     *
     * @param Brickstorm\WorldBundle\Entity\Country $parent
     */
    public function setParent(\Brickstorm\WorldBundle\Entity\Country $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return Brickstorm\WorldBundle\Entity\Country 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set continent
     *
     * @param Brickstorm\WorldBundle\Entity\Continent $continent
     */
    public function setContinent(\Brickstorm\WorldBundle\Entity\Continent $continent)
    {
        $this->continent = $continent;
    }

    /**
     * Get continent
     *
     * @return Brickstorm\WorldBundle\Entity\Continent 
     */
    public function getContinent()
    {
        return $this->continent;
    }
}