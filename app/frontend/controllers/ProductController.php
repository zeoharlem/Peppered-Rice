<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductController
 *
 * @author Theophilus Alamu <theophilus.alamu at gmail.com>
 */
namespace Multiple\Frontend\Controllers;

//use Multiple\Frontend\Models\Products;
use Multiple\Frontend\Models\Vendor,
        Multiple\Frontend\Models\Products,
        Multiple\Frontend\Models\Category;

class ProductController extends BaseController{
    //put your code here
    public function initialize() {
        parent::initialize();
        \Phalcon\Tag::appendTitle('Products');
    }
    
    public function indexAction() {
        $this->view->setRenderLevel(Phalcon\Mvc\View::LEVEL_AFTER_TEMPLATE);
        return;
    }
    
    public function totalItemAction() {
        echo count($this->session->get('cart_item'));
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);
        return;
    }
    
    public function showCartAction() {
        if($this->request->hasPost('showcart')){
            $stringBuilt    = ''; $counter = 0; $subTotal = [];
            if(empty($_SESSION['cart_item'])){
                exit('Empty Shopping Basket');
            }
            foreach($this->session->get('cart_item') as $key => $value){
                $subTotal[]     = $value['qty'] * $value['price'];
                $stringBuilt    .= '<li>
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin text-center">
                                <div class="thumb"  style="width:50%; border:none;">
                                    <img alt="" src="'.$value['image'].'">
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <div class="title">'.ucwords($value['name']).'</div>
                                <div class="price">$'.number_format($value['price'] * $value['qty'], 2).'<small>('.$value['qty'].' x '.$value['price'].')</small></div>
                            </div>
                        </div>
                        <a class="close-btn cancel" href="#" title="'.$value['id'].'"></a>
                    </div>
                </li>';
            }
            $stringBuilt    .= '<hr>
                <li class="checkout">
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <a href="http://localhost/peprice/checkout" class="le-button inverse">View cart</a>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <a href="http://localhost/peprice/checkout/process" class="le-button">Checkout</a>
                            </div>
                        </div>
                    </div>
                </li>';
            echo !empty($stringBuilt) ? $stringBuilt : 'Empty Shopping Basket(s)';
            $this->view->disable();
            exit;
        }
    }
    
    public function ajaxToCartAction() {
        //unset($_SESSION['cart_item']);
        if($this->request->isPost() && $this->request->isAjax()){
            $getItemProduct  = $this->request->getPost('item_product');
            switch ($this->request->getPost('action')) {
                case 'add':
                    $product    = Products::find('product_id='.
                            (int)$getItemProduct)->getFirst();
                    
                    //Check if quantity was sent with the post
                    $qty        = $this->request->hasPost('qty') ? 
                            $this->request->getPost('qty') : 1;
                    
                    //Set Item Array Values
                    $itemTray   = array(
                        $getItemProduct => array(
                            'name'  => $product->title, 
                            'id'    => $getItemProduct, 
                            'qty'   => $qty, 'option' => '', 
                            'price' => $product->sale_price,
                            
                            //product->added_by returns objects
                            'vendor_id' => $product->added_by,
                            //_____ ______ ______ _____ _____ ____
                            'shipping' => 0, 'tax' => 0, 'coupon' => '', 
                            'image' => $this->request->getPost('item_src'),
                            'subtotal'  => $product->sale_price,
                            'address'   => Products::__getAddress($product->added_by, 'address2'),
                            'addedby'   => Products::__convert($product->added_by, 'display_name'),
                            'location'  => Products::__getAddress($product->added_by, 'address1')
                        )
                    );
                    if($this->session->has('cart_item') || !empty($_SESSION['cart_item'])){
                        if(array_key_exists($getItemProduct, $this->session->get('cart_item'))){
                            foreach($this->session->get('cart_item') as $keys => $values){
                                if($getItemProduct == $keys){
                                    //Calculate the total price and assign to the session var
                                    //$pTaskPrice     =     count($pTaskCounter) * $values['price'];
                                    $pTaskCounter   = (int)$this->session->get('cart_item')[$getItemProduct]['qty'] + 1;
                                    $_SESSION['cart_item'][$keys]['qty']                                = $pTaskCounter;
                                }
                            }
                        }
                        else{
                            //Do not use array_merge() cos it will reassign the key value(index);
                            //$this->set('cart_item',array_merge($this->session->get('cart_item'),$itemTray));
                            $this->session->set('cart_item',$this->session->get('cart_item') + $itemTray);
                        }
                    }
                    else{
                        $this->session->set('cart_item', $itemTray);
                    }
                    echo count($this->session->get('cart_item'));
                    $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);
                    break;
                    
                //Removes the requested item to be deleted    
                case 'remove':
                    if($this->session->has('cart_item') || !empty($_SESSION['cart_item'])){
                        foreach ($this->session->get('cart_item') as $keys => $values){
                            if($getItemProduct == $keys){
                                unset($_SESSION['cart_item'][$keys]);
                            }
                            if(empty($_SESSION['cart_item'])){
                                $this->session->remove('cart_item');
                            }
                        }
                        echo count($this->session->get('cart_item'));
                        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);
                    }
                    break;
                    
                //Clears Everything in the Basket    
                case 'empty':
                    $this->session->remove('cart_item');
                    echo 0;
                    break;
            }
        }
        //Hide and Render Page Disabled for. You can return JSON (Noted);
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
        return;
    }
    
    public function removeItemAction(){
        
    }
    
    public function clearFlowAction(){
        
    }
    
    public function grandTotalAction(){
        echo number_format($this->__getSubTotal(), 2);
        exit();
    }
    
    public function __getSubTotal(){
        $total  = array();
        if($this->session->has('cart_item')){
            foreach($this->session->get('cart_item') as $keys=>$values){
                $total[]    =           $values['qty'] * $values['price'];
            }
        }
        return array_sum($total);
    }
    
    private function __getArrayNum($array){
        return count($array);
    }
}
