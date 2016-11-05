<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author Theophilus Alamu <theophilus.alamu at gmail.com>
 */
namespace Multiple\Backend\Models;

use Phalcon\Validation\Validator;

class Admin extends BaseModel{
    //put your code here
    public $password;
    public $codename;
    
    public function initialize(){
        
    }
    
    public function beforeValidationOnCreate(){
        $this->codename = $this->getDI()->getComponent()->helper->makeRandomInts(10);
    }


    public function validation(){
        $validator  = new \Phalcon\Validation();
        $validator->add('phone', new Validator\Uniqueness(array(
            'models'    => $this,
            'message'   => 'Phone already existed'
        )));
        $validator->add('agent_id', new Validator\Uniqueness(array(
            'models'    => $this,
            'message'   => 'Agent ID already existed'
        )));
        $validator->add('email', new Validator\Uniqueness(array(
            'models'    => $this,
            'message'   => 'Email Address already existed'
        )));
        $security       = new \Phalcon\Security();
        $password       = $this->getDI()->getRequest()->getPost('password');
        $this->password = $security->hash($password);
        return $this->validate($validator);
    }
}
