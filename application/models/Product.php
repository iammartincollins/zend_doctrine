<?php
use Doctrine\Common\Collections\ArrayCollection;

class Application_Model_Product {

	protected $id;

	protected $name;

	protected $description;

	protected $price;

	protected $categories; //FK
	
	public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    // public function assignToCategory($category)
    // {
    //     $this->categories[] = $category;
    // }

    public function getCategories()
    {
        return $this->categories;
    }

    // public function clearCategories()
    // {
    //     $this->getCategories()->clear();
    // }

	public function getId()
	{
		return $this->id;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	// public function setName($name)
	// {
	// 	$this->name = $name;
	// }
	
	public function getDescription()
	{
		return $this->description;
	}
	
	// public function setDescription($description)
	// {
	// 	$this->description = $description;
	// }
	
	public function getPrice()
	{
		return $this->price;
	}
	
	// public function setPrice($price)
	// {
	// 	$this->price = $price;
	// }
}