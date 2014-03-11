<?php

/**
* Product testing
*/
class CategoryControllerTest extends ControllerTestCase
{
	function testIndexAction()
	{
		$this->disPatch('/category/');
		$this->assertResponseCode(200);
	}

	function testGetCategory()
	{
		$this->dispatch('/category/2');

		$this->assertQueryCount('h2.cat-title', 1);
		$this->assertQueryContentContains("h2", "category");
	}
}