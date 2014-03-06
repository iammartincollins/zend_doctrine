<?php
use Doctrine\Common\Collections\ArrayCollection;

class Application_Model_Category {

	protected $id;

	protected $name;

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