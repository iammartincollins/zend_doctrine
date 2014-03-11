<?php

/**
* Product testing
*/
class ProductControllerTest extends ControllerTestCase
{
	function testIndexAction()
	{
		$this->disPatch('/product/');
		$this->assertResponseCode(200);
	}

	function testGetProduct()
	{
		$this->dispatch('/product/4');

		$this->assertQueryCount('h2.prod-title', 1);; //make check for prod-title in h2
	}
}