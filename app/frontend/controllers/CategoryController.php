<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryController
 *
 * @author Theophilus Alamu <theophilus.alamu at gmail.com>
 */
namespace Multiple\Frontend\Controllers;

use Multiple\Frontend\Models\Products;
use Multiple\Frontend\Models\Category;

class CategoryController extends BaseController{
    //put your code here
    private $_category;
    
    public function initialize() {
        parent::initialize();
        \Phalcon\Tag::appendTitle('Categories');
        $this->view->setVar('helper', $this->component->helper);
        $this->view->setVar('category', Category::find()->toArray());
        //var_dump(\VoltHelpers\Helpers::paginationPath()); exit;
        //var_dump(\TableSort\Sort::sortIcon('sdsdf'));exit;
    }
    
    public function indexAction($id = ''){
        $params = $this->request->getQuery();
        $this->view->pager  = Products::getList($params);
        $this->view->catName    = Category::findFirstByCategory_id($params['cat']);
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
        return;
    }
}
