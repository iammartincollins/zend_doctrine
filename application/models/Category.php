<?php
use Doctrine\Common\Collections\ArrayCollection;

class Application_Model_Category {

	/**
	 * Category ID
	 * @var integer
	 */
	protected $id;

	/**
	 * Category name
	 * @var string
	 */
	protected $name;

	/**
	 * Products in this category
	 * @var ArrayCollection
	 */
	protected $products;

	public function __construct()
	{
		$this->products = new ArrayCollection();
	}

	public function getId()
	{
		return $this->id;
	}
	
	public function getName()
	{
		return $this->name;
	}

    public function getProducts()
    {
        return $this->products;
    }
	
	// public function setName($name)
	// {
	// 	$this->name = $name;
	// }
}