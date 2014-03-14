<?php

class ProductController extends Zend_Controller_Action
{

	public function init()
	{
		/* Initialize action controller here */
	}

	public function indexAction()
	{
		
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
		$id = $this->getRequest()->getParam('id');

        $product = Zend_Registry::get('em')->getRepository('Application_Model_Product')->getProduct($id);

        if ($product) {
            $this->view->product = $product;
        } else {
            $this->_redirect('/product/');
        }
	}

}

