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
            $response = array();
            $response['vehicles'] = $this->VehicleModel->getAllvehicle();
            $this->load->view('modul/vehicle/vehicle_list',$response);
        }else{
            $this->session->set_flashdata("view-url","modul/homepage/home");
            $response['vehicles'] = $this->VehicleModel->getAllvehicle();
            $response['page'] = "modul/vehicle/vehicle_list";
            $this->load->view("layout",$response);
        }
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
            $this->VehicleModel->number = $this->input->post('vehicle-add-number');
            $this->VehicleModel->brand = $this->input->post('vehicle-add-brand');
            $this->VehicleModel->name = $this->input->post('vehicle-add-name');
            $this->VehicleModel->kilometer = $this->input->post('vehicle-add-kilometer');  
            $this->VehicleModel->transmission = $this->input->post('vehicle-add-transmission');
            $this->VehicleModel->year = $this->input->post('vehicle-add-year');
            $this->VehicleModel->rentalrates = $this->input->post('vehicle-add-rentalrates');
            if($this->VehicleModel->add()){
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
        if($this->input->is_ajax_request()){
            $response = array();
            if($id==null){
                $response['status'] = 400; // bad request
            }else{
                $this->VehicleModel->id = $id;
                $response['status'] = 200;
                if($this->VehicleModel->delete()){
                    $response['deleteVehicle'] = true;
                }else{
                    $response['deleteVehicle'] = false;
                }
            }
            echo json_encode($response);
        }else{
            // exit
        }
    }

    public function update($id=null){
        if($this->input->is_ajax_request()){
            $response = array();
            if($id==null){
                $response['status'] = 400; // bad request
            }else{
                $this->VehicleModel->id = $id;
                $this->VehicleModel->name = $this->input->post('vehicle-name');
                $this->VehicleModel->number = $this->input->post('vehicle-number');
                $this->VehicleModel->year = $this->input->post('vehicle-year');
                $this->VehicleModel->kilometer = $this->input->post('vehicle-kilometer');
                $this->VehicleModel->rentalrates = $this->input->post('vehicle-rentalrates');
                $response['status'] = 200;
                if($this->VehicleModel->update()){
                    $response['updateVehicle'] = true;
                }else{
                    $response['updateVehicle'] = false;
                }
            }
            echo json_encode($response);
        }else{
            // exit
        }
    }


}
