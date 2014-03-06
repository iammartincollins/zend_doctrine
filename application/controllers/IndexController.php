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
    	$dql = "SELECT p FROM Product p ORDER BY p.id DESC";
		$query = $em->createQuery($dql);
		$query->setMaxResults(30);

		$this->view->products = $query->getResult();
		$this->view->hello = "World!";
    }


}

