<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrderController
 *
 * @author Theophilus Alamu <theophilus.alamu at gmail.com>
 */
namespace Multiple\Frontend\Controllers;

use Multiple\Frontend\Models\Category;
use Multiple\Frontend\Models\Order;
use Multiple\Frontend\Models\Sales;
use Phalcon\Mvc\Model\Transaction\Manager;
use Phalcon\Mvc\Model\Transaction\Failed;

class OrderController extends BaseController{
    //put your code here
    private $_track;
    //const ACESS_TOKEN = 'e824c4f685bca92ed63ffd522a855f52';
    const ACESS_TOKEN = 'df6bb34d1342938032946e88cce350dcce17d58c2267a0c74474b933be45823a';
    const PARAMETER_MISSING = 100, ACTION_COMPLETE = 200, SHOW_ERROR_MESSAGE = 201;
    const INVALID_ACCESS_TOKEN = 101, ERROR_IN_EXECUTION = 404;
    
    public function initialize() {
        parent::initialize();
        \Phalcon\Tag::appendTitle('Order Now');
        $this->view->setVar('totalPrice', $this->__getSubTotal());
        $this->view->setVar('category', Category::find()->toArray());
        $this->_track = $this->component->helper->makeRandomInts(10);
        //$this->view->setVar('totalPrice', $this->__getSubTotal());
        $this->view->setVar('track_id', $this->_track);
    }
    
    public function indexAction(){
        $this->view->setVar('totalPrice', $this->__getSubTotal());
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
        return;
    }
    
    public function startAction(){
        $dbError    = '';
        $tracker    = TRUE;
        $response   = new \Phalcon\Http\Response();
        $track_id   = $this->request->getPost('trans_id');
        
        if($this->request->isPost() && $this->request->isAjax()){
            if($this->session->has('cart_item') && !empty($_SESSION['cart_item'])){
                try {
                    $transMangager  = new Manager();
                    $transaction    = $transMangager->get();
                    $order          = new Order();
                    $order->setTransaction($transaction);
                    $default        = date('Y-m-d');
                    $this->__buildRequest(array(
                        'trans_id'  => $track_id, 'vendor_id' => 1));
                    
                    //Setup the order insert which is the post field
                    if($order->save($this->request->getPost()) == FALSE){
                        $tracker    = FALSE;
                        $transaction->rollback("Order(s) cannot be placed");
                        $dbError    = $order->getMessages();
                    }
                    
                    //Setup the sales insert which is session.get(cart_item);
                    $sales          = new Sales();
                    $sales->setTransaction($transaction);
                    $this->__taskSessionAdd($track_id);
                    $vendorSales    = json_encode($this->session->get('cart_item'));
                    $hourLater      = strtotime(date('Y-m-d H:i:s')) + 60 * 60; 
                    $startSales     = array(
                        'trans_id'      => $track_id,
                        'date_of_order' => date('Y-m-d H:i:s'),
                        'item_sold'     => json_encode($this->session->get('cart_item')),
                        'vendor_id'     => $this->session->get('auth')['codename'],
                        'delivery_time' => date('Y-m-d H:i:s', $hourLater),
                        'status'        => 'pending',
                        'agent'         => 20396,
                    );
                    
                    if($sales->save($startSales) == FALSE){
                        $tracker    = FALSE;
                        $transaction->rollback("Sale(s) cannot be performed");
                        $dbError    = $transaction->getMessages();
                    }
                    $transaction->commit();
                } catch (Failed $exc) {
                    $tracker    = false;
                    $this->flash->error('error: '. $exc->getMessage());
                    $response->setJsonContent(array(
                        'status'    => $tracker,
                        'message'   => $exc->getMessage(),
                        'dbaseerr'  => $order->getMessages()));
                    $exc->getTraceAsString();
                }
            }
        }
        if($tracker){
            $tasking        = array(
                'team_id'   => 9896,
                'agent_id'  => 20396,
                //'agent_id'  => $track_id['fleet_id'],
            );
            $customer       = $this->request->getPost();
            $customerRes    = $this->__createTask($tasking, $customer);
            $trans_id       = array('trans_id' => $customer['trans_id']);
            $customerJob    = $this->jobFlow($trans_id + $customerRes['data']);
            
            $response->setJsonContent(array(
                'status'    => $tracker,
                'data'      => $this->request->getPost(),
                'tookan'    => $customerRes,
                'job'       => $customerJob
            ));
        }
        $response->setHeader('Content-Type', 'application/json');
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);
        $response->send();
    }
    
    /**
     * Mind you this method must be used with a post request
     * @return type
     */
    public function jobFlow($jobTrack){
        $response   = new \Phalcon\Http\Response();
        $job    = new \Multiple\Frontend\Models\Job();
        return $job->create($jobTrack);
    }
    
    /**
     * using the API url v2
     * $customer variable must be array
     * array(email,lastname,phonenumber,address);
     * @param type $team_id
     * @param array $customer
     * @return type
     */
    public function __createTask($task_id, array $customer){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.tookanapp.com/v2/create_task");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
            \"api_key\": \"".self::ACESS_TOKEN."\",
            \"order_id\": \"".$customer['trans_id']."\",
            \"team_id\": \"".$task_id['team_id']."\",
            \"auto_assignment\": \"0\",
            \"job_description\": \"Delivery\",
            \"customer_email\": \"".$customer['email']."\",
            \"customer_username\": \"".$customer['lastname']." ".$customer['firstname']."\",
            \"customer_phone\": \"".$customer['phonenumber']."\",
            \"customer_address\": \"".$customer['address']."\",
            \"latitude\": \"\",
            \"longitude\": \"\",
            \"job_delivery_datetime\": \"".date('m/d/Y H:i:s')." \",
            \"has_pickup\": \"0\",
            \"has_delivery\": \"1\",
            \"layout_type\": \"0\",
            \"tracking_link\": 1,
            \"timezone\": \"+1\",
            \"custom_field_template\": \"\",
            \"meta_data\": [
              {
                \"label\": \"\",
                \"data\": \"\"
              }
            ],
            \"fleet_id\": \"".$task_id['agent_id']."\",
            \"ref_images\": [
              \"http://tookanapp.com/wp-content/uploads/2015/11/logo_dark.png\",
              \"http://tookanapp.com/wp-content/uploads/2015/11/logo_dark.png\"
            ],
            \"notify\": 1,
            \"tags\": \"\",
            \"geofence\": 0
        }");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json"
        ));
        $response   = curl_exec($ch);
        $returns    = json_decode($response, TRUE);
        curl_close($ch); return $returns;
    }
    
    public function fixAssignTeamAction(){
        $ch         = curl_init();
        $typeRespo  = new \Phalcon\Http\Response();
        
        //$customer   = $this->request->getPost('data');
        parse_str($this->request->getPost('data'), $customer);
        
        $getTeam    = json_decode($this->__getAvailableFleets());
        $strArea    = array_keys($this->__getShopsTask('location'));
        
        $hourLater  = strtotime($customer['delivery_time']) + 60 * 60; 
        
        curl_setopt($ch, CURLOPT_URL, "https://api.tookanapp.com/create_task");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        
        curl_setopt($ch, CURLOPT_POST, TRUE);
        foreach($getTeam->data as $keys => $values){
            //var_dump($this->session->get('strLocation')); exit;
            if(strtolower($values->team_name) == $_SESSION['strLocation']){
                foreach($this->__getShopsTask('addedby') as $keyStore => $keyValue){
                    curl_setopt($ch, CURLOPT_POSTFIELDS, "{
                        \"access_token\": \"".self::ACESS_TOKEN."\",
                        \"order_id\": \"".$customer['trans_id']."\",
                        \"team_id\": \"".$values->team_id."\",
                        \"auto_assignment\": \"1\",
                        \"job_description\": \"Groceries Delivery\",
                        \"job_pickup_phone\": \"\",
                        \"job_pickup_name\": \"".$keyStore."\",
                        \"job_pickup_email\": \"\",
                        \"job_pickup_address\": \"".$keyValue[0]['address']."\",
                        \"job_pickup_latitude\": \"\",
                        \"job_pickup_longitude\": \"\",
                        \"job_pickup_datetime\": \"".date('m/d/Y H:i:s')."\",
                        \"customer_email\": \"".$customer['email']."\",
                        \"customer_username\": \"".$customer['lastname']." ".$customer['firstname']."\",
                        \"customer_phone\": \"".$customer['phonenumber']."\",
                        \"customer_address\": \"".$customer['address']."\",
                        \"latitude\": \"\",
                        \"longitude\": \"\",
                        \"job_delivery_datetime\": \"".date('m/d/Y H:i:s', $hourLater)." \",
                        \"has_pickup\": \"1\",
                        \"has_delivery\": \"1\",
                        \"layout_type\": \"0\",
                        \"tracking_link\": 1,
                        \"timezone\": \"+1\",
                        \"custom_field_template\": \"\",
                        \"meta_data\": [
                          {
                            \"label\": \"\",
                            \"data\": \"\"
                          }
                        ],
                        \"pickup_custom_field_template\": \"\",
                        \"pickup_meta_data\": [
                          {
                            \"label\": \"\",
                            \"data\": \"\"
                          }
                        ],
                        \"fleet_id\": \"\",
                        \"p_ref_images\": [
                          \"http://tookanapp.com/wp-content/uploads/2015/11/logo_dark.png\",
                          \"http://tookanapp.com/wp-content/uploads/2015/11/logo_dark.png\"
                        ],
                        \"ref_images\": [
                          \"http://tookanapp.com/wp-content/uploads/2015/11/logo_dark.png\",
                          \"http://tookanapp.com/wp-content/uploads/2015/11/logo_dark.png\"
                        ],
                        \"notify\": 1,
                        \"tags\": \"\",
                        \"geofence\": 0
                    }");
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                        "Content-Type: application/json"
                    ));
                    $response   = curl_exec($ch);
                    curl_close($ch);
                    $returned   = json_decode($response, TRUE);
                    if($returned['status'] == self::ACTION_COMPLETE){
                        $typeRespo->setHeader('Content-Type', 'application/json');
                        $typeRespo->setJsonContent(array('order_id' => $customer['trans_id'],
                            'data' => $returned));
                    }
                    else{
                        $typeRespo->setHeader('Content-Type', 'application/json');
                        $typeRespo->setJsonContent(array('data' => array(
                            'error' => $returned['message'])));
                    }
                }
                $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);
                $typeRespo->send();
                exit();
            }
        }
    }
    
    public function getAgentsAction(){
        $team       = array(); $status  = false;
        $typeResp   = new \Phalcon\Http\Response();
        $location   = $this->session->get('strLocation');
        
        $getTeam    = json_decode($this->__getAvailableFleets());
        $strArea    = array_keys($this->__getShopsTask('location'));
        if(!is_null($location) || !empty($location)){
            $jsonString = "{
                \"access_token\": \"".self::ACESS_TOKEN."\"
            }";
            $response   = $this->__curlRequestTask(
                    "https://api.tookanapp.com/view_team", $jsonString);
            foreach($getTeam->data as $keyTeam => $keyVal){
                if(strtolower($keyVal->team_name) == $location){
                    $status = true;
                    $team[$keyVal->team_id] = array('fleets'=>$keyVal->fleets);
                }
            }
        }
        $typeResp->setHeader('Content-Type', 'application/json');
        $typeResp->setJsonContent(array('status' => $status, 'data' => $team));
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);
        $typeResp->send();
        exit();
    }
    
    public function assignAgentsAction(){
        if($returned['status'] == self::ACTION_COMPLETE){
            curl_setopt($ch, CURLOPT_URL, "https://api.tookanapp.com/assign_fleet_to_task");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);

            curl_setopt($ch, CURLOPT_POST, TRUE);

            curl_setopt($ch, CURLOPT_POSTFIELDS, "{
              \"access_token\": \"".self::ACESS_TOKEN."\",
              \"job_id\": \"".$returned['data']['job_id']."\",
              \"fleet_id\": \"\",
              \"team_id\": \"".$values->team_id."\"
            }");

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
              "Content-Type: application/json"
            ));
            $response   = curl_exec($ch);
            curl_close($ch);
            $stackFlow  = json_decode($response, true);
            if($stackFlow['status'] == 200){
                $typeRespo->setHeader('Content-Type', 'application/json');
                $typeRespo->setJsonContent(array('data' => $returned));
            }
            else{
                $typeRespo->setHeader('Content-Type', 'application/json');
                $typeRespo->setJsonContent(array('data' => array(
                    'error' => $stackFlow['message'])));
            }
        }
    }
    
    /**
     * This is for testing purpose
     * can be deleted for production purpose
     */
    public function testAction(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.tookanapp.com/v2/get_available_agents
        ");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
          \"api_key\": \"2b997be77e2cc22becfd4c66426ef504\",
          \"latitude\": \"30.2221\",
          \"longitude\": \"70.4242\"
        }");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          "Content-Type: application/json"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    
    /**
     * 
     * @param type $url
     * @param string $token
     * @param string $jsonString
     * @return string
     */
    private function __curlRequestTask($url, $jsonString){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonString);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          "Content-Type: application/json"
        ));

        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
    
    /**
     * @return string
     * Get the addresses of the shops
     */
    private function __getStringAddress(){
        return join('; ', array_keys($this->__getShopsTask('address')));
    }
    
    /**
     * @return json
     */
    private function __getAvailableFleets(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.tookanapp.com/view_team");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
            \"access_token\": \"e824c4f685bca92ed63ffd522a855f52\"
        }");
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json"
        ));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $response = curl_exec($ch);
        if(curl_errno($ch)){
            var_dump(curl_error($ch));
        }
        curl_close($ch);
        return $response;
    }
    
    //comma separated shops owner's name
    private function __stringifyJobOwner(){
        $stringify  = array_keys($this->__getShopsTask('addedby'));
        return join(',', $stringify);
    }
    
    //comma separated shops owner's name
    private function __stringifyJobOwnerAddress(){
        $stringify  = array_keys($this->__getShopsTask('address2'));
        return join(',', $stringify);
    }
    
    /**
     * @param type $tracker
     * force trans_id into the session array
     */
    private function __taskSessionAdd($tracker){
        if($this->session->has('cart_item') || isset($_SESSION['cart_item'])){
            foreach($this->session->get('cart_item') as $keys=>$values){
                $_SESSION['cart_item'][$keys]['trans_id']   = $tracker;
            }
        }
    }
    
    /**
     * @param string $key
     * @return array
     * Group array with the same value together
     */
    private function __getShopsTask($key=''){
        $return = array();
        foreach($this->session->get('cart_item') as $keys=>$values){
            $return[$values[$key]][]   = $values;
        }
        return $return;
    }
}
