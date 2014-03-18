<?php

use Doctrine\Common\Collections\ArrayCollection;

class Application_Model_Product
{
    /**
     * Product ID
     * @var integer
     */
    protected $id;

    /**
     * Product name
     * @var string
     */
    protected $name;

    /**
     * Product description
     * @var string
     */
    protected $description;

    /**
     * Product image
     * @var string
     */
    protected $image;

    /**
     * Category price
     * @var decimal(6,2)
     */
    protected $price;

    /**
     * Categories that product is a part of
     * @var ArrayCollection
     */
    protected $categories; //FK
    
    /**
     * __construct
     * 
     * Makes categories an ArrayCollection
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    /**
     * getCategories
     * 
     * Retrieves product's categories
     *
     * @access public
     * @return ArrayCollection array of categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * getId
     * 
     * Retrieves ID
     *
     * @access public
     * @return int product ID
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * getName
     * 
     * Retrieves product name
     *
     * @access public
     * @return string product name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * getImage
     * 
     * Retrieves product image URL
     *
     * @access public
     * @return string url of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * getDescription
     * 
     * Retrieves product description
     *
     * @access public
     * @return string product description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * getPrice
     * 
     * Retrieves product
     *
     * @access public
     * @return decimal(6, 2) product price
     */
    public function getPrice()
    {
        return $this->price;
    }
}