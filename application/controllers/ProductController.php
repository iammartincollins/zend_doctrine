<?php

class ProductController extends Zend_Controller_Action
{
    /**
     * init
     * 
     * Initialises controller
     * @access public
     * @return void
     */
    public function init()
    {
        /* Initialize action controller here */
    }

    /**
     * indexAction
     * 
     * @return void
     */
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