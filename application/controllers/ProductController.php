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

	/**
     * getAction
     *
     * Stores the data from a product and sends to view
     *
     * @access public
     * @return void
     */
	public function getAction()
	{
		$request = $this->getRequest();
		$id = $request->getParam('id');

		$this->view->product = Zend_Registry::get('em')->getRepository('Application_Model_Product')->getProduct($id);
	}

}

