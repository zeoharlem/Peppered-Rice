<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Multiple\Frontend\Controllers;

/**
 * Description of AgentsController
 *
 * @author Theophilus Alamu <theophilus.alamu at gmail.com>
 */
class AgentsController extends BaseController{
    //put your code here
    const ACESS_TOKEN = 'df6bb34d1342938032946e88cce350dcce17d58c2267a0c74474b933be45823a';
    const PARAMETER_MISSING = 100, ACTION_COMPLETE = 200, SHOW_ERROR_MESSAGE = 201;
    const INVALID_ACCESS_TOKEN = 101, ERROR_IN_EXECUTION = 404;
    
    public function initialize() {
        parent::initialize();
        \Phalcon\Tag::appendTitle('Agents');
    }
    
    public function indexAction(){
        $jsonString = "{\"api_key\": \"".self::ACESS_TOKEN."\"}";
        $respo  = $this->__curlRequestTask(
                'https://api.tookanapp.com/v2/get_available_agents', $jsonString);
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
        $this->view->setVar('agents', $respo);
        return;
    }
    
    public function getAgentsAction(){
        
    }
    
    public function createAction(){
        if($this->request->isPost()){
            $agents = new \Multiple\Frontend\Models\Admin();
            /**$jsonString = "{
                \"api_key\": \"".self::ACESS_TOKEN."\",
                \"email\": \"".$this->request->getPost('email')."\",
                \"name\": \"".$this->request->getPost('firstname')."\",
                \"phone\": \"".$this->request->getPost('phone')."\",
                \"transport_type\": \"1\",
                \"transport_desc\": \"auto\",
                \"license\": \"demo\",
                \"color\": \"blue\",
                \"timezone\": \"1\",
                \"team_id\": \"9896\",
                \"password\": \"".$this->component->helper->makeRandomString(4)."\"
                \"username\": \"".$this->request->getPost('username')."\",
                \"first_name\": \"".$this->request->getPost('firstname')."\",
                \"last_name\": \"".$this->request->getPost('lastname')."\"
            }";
            $agentResponse  = $this->__curlRequestTask(
                    'https://api.tookanapp.com/v2/add_agent', $jsonString);
            $decodeResponse = json_decode($agentResponse);**/
            
            if($agents->create($this->request->getPost())){
                $this->flash->success('Agent Created Successfully');
                $this->response->redirect('getAgents?flow='.$this->component
                        ->helper->makeRandomString(20));
            }
        }
        $this->view->setTemplateAfter('dashboard');
        return;
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
    
}
