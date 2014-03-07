<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->products = Zend_Registry::get('em')->getRepository('Application_Model_Product')->getRandomProducts(3, 4, 5);
    }


}

