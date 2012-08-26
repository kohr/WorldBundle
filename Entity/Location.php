<?php

namespace Brickstorm\WorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brickstorm\WorldBundle\Entity\Location
 */
class Location
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
     * @var string $adress
     */
    private $adress;

    /**
     * @var integer $zipcode
     */
    private $zipcode;

    /**
     * @var string $url
     */
    private $url;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $twitterhash
     */
    private $twitterhash;

    /**
     * @var date $created_at
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     */
    private $updated_at;

    /**
     * @var Brickstorm\WorldBundle\Entity\Location
     */
    private $children;

    /**
     * @var Brickstorm\WorldBundle\Entity\City
     */
    private $city;

    /**
     * @var Brickstorm\WorldBundle\Entity\LocationType
     */
    private $type;

    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set adress
     *
     * @param string $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set zipcode
     *
     * @param integer $zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * Get zipcode
     *
     * @return integer 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
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
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set twitterhash
     *
     * @param string $twitterhash
     */
    public function setTwitterhash($twitterhash)
    {
        $this->twitterhash = $twitterhash;
    }

    /**
     * Get twitterhash
     *
     * @return string 
     */
    public function getTwitterhash()
    {
        return $this->twitterhash;
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
     * Add children
     *
     * @param Brickstorm\WorldBundle\Entity\Location $children
     */
    public function addLocation(\Brickstorm\WorldBundle\Entity\Location $children)
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
     * Set city
     *
     * @param Brickstorm\WorldBundle\Entity\City $city
     */
    public function setCity(\Brickstorm\WorldBundle\Entity\City $city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return Brickstorm\WorldBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set type
     *
     * @param Brickstorm\WorldBundle\Entity\LocationType $type
     */
    public function setType(\Brickstorm\WorldBundle\Entity\LocationType $type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return Brickstorm\WorldBundle\Entity\LocationType 
     */
    public function getType()
    {
        return $this->type;
    }
}