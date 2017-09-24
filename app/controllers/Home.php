<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index(){
        $response = array();
        if($this->input->is_ajax_request()){
            $this->home();
            $response['status'] = 200;
            echo json_encode($response);
        }else{
            $this->session->set_flashdata("view-url","modul/homepage/home");
            $response['page'] = "modul/homepage/home";
            $this->load->view("layout",$response);
        }
    }

    public function home(){
        $this->load->view('modul/homepage/home');
    }
}
