<?php

class CategoryController extends Zend_Controller_Action
{
    /**
     * init
     * 
     * Initialise controller
     *
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
     * Sends list of all categories to view
     *
     * @access public
     * @return void
     */
    public function indexAction()
    {
        $this->view->categories = Zend_Registry::get('em')->getRepository('Application_Model_Category')->getCategories();
    }

    /**
     * getAction
     *
     * Stores the data from a category and sends to view
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