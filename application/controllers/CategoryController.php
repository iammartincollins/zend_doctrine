<?php

class CategoryController extends Zend_Controller_Action
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

		$this->view->category = Zend_Registry::get('em')->getRepository('Application_Model_Category')->getCategory($id);

		// $query = Zend_Registry::get('em')->createQueryBuilder();

		// $query 	->select('c')
		// 		->from('Application_Model_Category', 'c')
		// 		->where('c.id = ?1')
		// 		->setParameter(1, $id);

		// $query = $query->getQuery();
		// $this->view->category = $query->getSingleResult(); //use getResult instead for more than 1 result
	}

}

