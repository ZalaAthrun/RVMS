<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index(){
        $this->login();
    }

    public function login(){
        $response = array();
        if(!$this->input->is_ajax_request()){
            $this->load->view("layout");        
        }else{
            $this->UserModel->username = $this->input->post('username');
            $this->UserModel->password = $this->input->post('password');
            $user = $this->UserModel->login();
            if(!$user){
                $response['login'] = false;
            }else{
                $response['login'] = true;
                $this->session->set_userdata('user',$user);
            }
            $response['status'] = 200;
            $response['user'] = $this->input->post('username');
            echo json_encode($response);  
        }
    }

    public function logout(){
        $response=array();
        if(!$this->input->is_ajax_request()){
            
        }else{
            $response['status'] = 200;
            if($this->session->userdata('user')==null){
                $response['logout'] = false;
            }else{
                $response['logout'] = true;
                $this->session->unset_userdata('user');
            }
            echo json_encode($response);
        }
    }

}
