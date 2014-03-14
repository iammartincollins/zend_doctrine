<?php

class CategoryController extends Zend_Controller_Action
{

	public function init()
	{
		/* Initialize action controller here */
	}

	public function indexAction()
	{
        $this->view->categories = Zend_Registry::get('em')->getRepository('Application_Model_Category')->getCategories();
	}

	/**
     * getAction
     *
     * Stores the data from an category and sends to view
     *
     * @access public
     * @return void
     */
	public function getAction()
	{
		$request = $this->getRequest();
		$id = $request->getParam('id');

		$this->view->category = Zend_Registry::get('em')->getRepository('Application_Model_Category')->getCategory($id);

	}

}

