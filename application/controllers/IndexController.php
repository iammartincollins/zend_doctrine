<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    	//temporary just to test getting data from db
        $products = new Application_Model_Product();
        $categories = new Application_Model_Category();
        $dql = "SELECT p FROM Application_Model_Product p ORDER BY p.id DESC";
        $query = Zend_Registry::get('em')->createQuery($dql);
        $query->setMaxResults(30);

        //echo var_dump($query);
		$this->view->products = $query->getResult();
		$this->view->hello = "World!";
    }


}

