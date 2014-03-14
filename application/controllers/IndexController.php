<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    /**
     * indexAction
     *
     * Stores the data from 3 items and sends to view
     *
     * @access public
     * @return void
     */
    public function indexAction()
    {
        $this->view->products = Zend_Registry::get('em')->getRepository('Application_Model_Product')->getSomeProducts(3, 4, 5);
    }


}

