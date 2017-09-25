<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index(){
        $response = array();
        if($this->input->is_ajax_request()){
            $this->list();
        }else{
            $this->session->set_flashdata("view-url","modul/homepage/home");
            $response['users'] = $this->UserModel->getAllUser();
            $response['page'] = "modul/user/user_list";
            $this->load->view("layout",$response);
        }
    }

    public function list(){
        $response = array();
        $response['users'] = $this->UserModel->getAllUser();
        $this->load->view('modul/user/user_list',$response);
    }

    public function addForm(){
        $response = array();
        if($this->input->is_ajax_request()){
            $this->load->view('modul/user/user_add');
        }else{
            $response['page'] = "modul/user/user_add";
            $this->load->view("layout",$response);
        }
    }

    public function add(){
        $response = array();
        if($this->input->is_ajax_request()){
            $this->UserModel->username = $this->input->post('user-add-username');
            $this->UserModel->email = $this->input->post('user-add-email');
            $this->UserModel->password = $this->input->post('user-add-password');
            $this->UserModel->role = $this->input->post('user-add-role');
            $this->UserModel->name = $this->input->post('user-add-name');
            if($this->UserModel->add()){
                $response['status'] = 201;
                $response['userAdd'] = true;
            }else{
                $response['status'] = 204;
                $response['userAdd'] = false;
            }
        }else{
            $response['status'] = 400;
        }
        echo json_encode($response);
    }
}
