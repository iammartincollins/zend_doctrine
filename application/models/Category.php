<?php

class Application_Model_Category {

	protected $id;

	protected $name;

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
}