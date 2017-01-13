<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Multiple\Backend\Controllers;

/**
 * Description of SalesController
 *
 * @author ENNY
 */
class SalesController extends BaseController{
    //put your code here
    
    public function indexAction(){
        var_dump($this->__totalKeySales());
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);
        return;
    }
    
    private function __totalKeySales($key=null){
        $totalKeySales  = [];
        $itemflow   = []; $itemQtys = [];
        
        if(is_null($key) || empty($key)){
            $sales = \Multiple\Backend\
                    Models\Sales::find()->toArray();
            foreach($sales as $keyStack => $valueStack){
                //Set for ttotal price for the all the sale
                $itemflow[$keyStack] = $this->__setKeyJsonflow(
                        $valueStack['item_sold'], 'price');
                
                //Set for total quantity fot the sales
                $itemQtys[$keyStack] = $this->__setKeyJsonflow(
                        $valueStack['item_sold'], 'qty');
            }
            $newQtys    = $itemQtys[0];
            $newitflw   = $itemflow[0];
            $stackflow  = $this->__combineArray($newQtys, $newitflw);
            reset($stackflow);
            while(list($keyList,$valueList) = each($stackflow)){
                $totalKeySales[]    = $valueList * $keyList;
            }
            return $totalKeySales;
        }
    }
    
    private function __setKeyJsonflow($string, $key=null){
        $stackflow  = [];
        $arrString  = json_decode($string);
        if(!is_null($key) || !empty($key)){
            foreach($arrString as $keys => $values){
                if(array_key_exists($key, $values)){
                    $stackflow[] = $values->$key;
                }
            }
        }
        return $stackflow;
    }
    
    private function __combineArray($keys, $values){
        $results    = array();
        foreach($keys as $index => $flow){
            $results[$flow][] = $values[$index];
        }
        array_walk($results, create_function('&$v',
                '$v = (count($v) == 1)? array_pop($v): $v;'));
        return $results;
    }
}
