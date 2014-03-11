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

		$this->assertQueryContentContains("h2", "BlackBerry_5991");
	}
}