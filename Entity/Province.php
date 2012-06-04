<?php

namespace Brickstorm\WorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brickstorm\WorldBundle\Entity\Province
 */
class Province
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
     * @var integer $parent_id
     */
    private $parent_id;

    /**
     * @var Brickstorm\WorldBundle\Entity\Province
     */
    private $children;

    /**
     * @var Brickstorm\WorldBundle\Entity\Province
     */
    private $parent;

    /**
     * @var Brickstorm\WorldBundle\Entity\Country
     */
    private $country;

    /**
     * @var Brickstorm\WorldBundle\Entity\Province
     */
    private $nearby;

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
     * Set parent_id
     *
     * @param integer $parentId
     */
    public function setParentId($parentId)
    {
        $this->parent_id = $parentId;
    }

    /**
     * Get parent_id
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Add children
     *
     * @param Brickstorm\WorldBundle\Entity\Province $children
     */
    public function addProvince(\Brickstorm\WorldBundle\Entity\Province $children)
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
     * Set parent
     *
     * @param Brickstorm\WorldBundle\Entity\Province $parent
     */
    public function setParent(\Brickstorm\WorldBundle\Entity\Province $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return Brickstorm\WorldBundle\Entity\Province 
     */
    public function getParent()
    {
        return $this->parent;
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
     * Get nearby
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getNearby()
    {
        return $this->nearby;
    }
}