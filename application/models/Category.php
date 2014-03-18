<?php

use Doctrine\Common\Collections\ArrayCollection;

class Application_Model_Category
{
    /**
     * Category ID
     * 
     * @var integer
     */
    protected $id;

    /**
     * Category name
     * 
     * @var string
     */
    protected $name;

    /**
     * Products in this category
     * 
     * @var ArrayCollection
     */
    protected $products;

    /**
     * __construct
     * 
     * Makes $products an ArrayCollection
     * 
     * @access public
     */
    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * getId
     * 
     * Retrieves category ID
     * 
     * @access public
     * @return int category ID
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * getName
     * 
     * Retrieves category name
     * 
     * @access public
     * @return string category name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * getProducts
     * 
     * Retrieves category's products
     * 
     * @access public
     * @return ArrayCollection products
     */
    public function getProducts()
    {
        return $this->products;
    }
}