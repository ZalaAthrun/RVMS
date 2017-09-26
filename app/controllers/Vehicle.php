<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('VehicleModel');
    }

    public function index(){
        $response = array();
        if($this->input->is_ajax_request()){
            $this->list();
        }else{
            $this->session->set_flashdata("view-url","modul/homepage/home");
            $response['vehicles'] = $this->vehicleModel->getAllvehicle();
            $response['page'] = "modul/vehicle/vehicle_list";
            $this->load->view("layout",$response);
        }
    }

    public function list(){
        $response = array();
        $response['vehicles'] = $this->vehicleModel->getAllvehicle();
        $this->load->view('modul/vehicle/vehicle_list',$response);
    }

    public function addForm(){
        $response = array();
        if($this->input->is_ajax_request()){
            $this->load->view('modul/vehicle/vehicle_add');
        }else{
            $response['page'] = "modul/vehicle/vehicle_add";
            $this->load->view("layout",$response);
        }
    }

    public function add(){
        $response = array();
        if($this->input->is_ajax_request()){
            if(true){
                $response['status'] = 201; // created
                $response['vehicleAdd'] = true;
            }else{
                $response['status'] = 204; // fail created blank
                $response['vehicleAdd'] = false;
            }
        }else{
            $response['status'] = 400;
        }
        echo json_encode($response);
    }

    public function delete($id=null){

    }

}
