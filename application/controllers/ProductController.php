<?php

class ProductController extends Zend_Controller_Action
{

	public function init()
	{
		/* Initialize action controller here */
	}

	public function indexAction()
	{
		$this->view->msg = "index action";
	}

	public function getAction()
	{
		$request = $this->getRequest();
		$id = $request->getParam('id');
		//$this->view->msg = $id;

		$this->view->product = Zend_Registry::get('em')->getRepository('Application_Model_Product')->getProduct($id);
	}

}

