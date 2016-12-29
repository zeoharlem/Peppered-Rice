<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of i
 *
 * @author Theophilus Alamu <theophilus.alamu at gmail.com>
 */
namespace Multiple\Frontend\Controllers;

use Multiple\Frontend\Models\Vendor,
    Multiple\Frontend\Models\Category,
    Multiple\Frontend\Models\Products;

use Multiple\Frontend\Models\Admin;

class IndexController extends BaseController{
    //put your code here
    public function initialize() {
        parent::initialize();
        \Phalcon\Tag::appendTitle('Welcome');
        $this->view->setVar('agents', $this->__getAgents(10));
    }
    
    public function indexAction(){
        $category   = Category::find()->toArray();
        $available  = Products::find(array(
            'category'=>2,'limit'=>8,'order' => 'RAND()'))->toArray();
        $builders   = $this->modelsManager->createBuilder();
        $builders->from('Multiple\Frontend\Models\Products')
                ->notInWhere('Multiple\Frontend\Models\Products.category', array(2));
        //var_dump($builders->getQuery()->execute()); exit;
        $this->view->setVars(array(
            'category'      => $category,
            'available'     => $available,
            'helper'        => $this->component->helper,
            'products'      => $builders->getQuery()->execute(),
        ));
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_LAYOUT);
        return;
    }
    
    public function show404(){
        
    }
    
    public function show409(){
        
    }
    
    public function getProducts(){
        return Products::find(array('limit' => 3));
    }
    
    public function getHighestSales(){
        
    }
    
    public function getBreakFast(){
        return Products::find(array('category=4', array('limit'=>3)));
    }
    
    private function __getAgents($limit=''){
        return !empty($limit) ? Admin::find(array(
            'limit' => $limit, 'order' => 'RAND()'))->toArray() : 
            Admin::find(array('order' => 'RAND()'))->toArray();
    }
}
