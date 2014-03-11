<?php

class IndexControllerTest extends ControllerTestCase
{
	function testIndexReachable()
	{
		$this->disPatch('/');
		$this->assertResponseCode(200);
	}

	function testIndexGetsHighlightedProducts()
	{
		$this->disPatch('/');
		$this->assertQueryCount('div.a-product', 3);
	}
}

