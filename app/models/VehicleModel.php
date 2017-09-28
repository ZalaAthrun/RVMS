<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class VehicleModel extends CI_Model {
        public $id;
        public $number;
        public $brand;
        public $name;
        public $kilometer;
        public $transmission;
        public $year;
        public $rentalrates;
        public function getAllVehicle(){
            $vehicles = $this->db->get('vehicles');
            return $vehicles->result();
        }
        public function add(){
            $vehicle = array(
                'number' => $this->number,
                'brand' => $this->brand,
                'name' => $this->name,
                'kilometer' => $this->kilometer,
                'transmission' => $this->transmission,
                'year' => $this->year,
                'rentalrates' => $this->rentalrates
            );
            $this->db->insert('vehicles',$vehicle);
            return true;
        }
        public function delete(){
            $vehicle = array(
                "id" => $this->id
            );
            $this->db->delete('vehicles',$vehicle);
            return true;
        }
        public function update(){
            $vehicle = array(
                'number' => $this->number,
                'name' => $this->name,
                'kilometer' => $this->kilometer,
                'year' => $this->year,
                'rentalrates' => $this->rentalrates
            );
            $this->db->where('id',$this->id);
            $this->db->update('vehicles',$vehicle);
            return true;
        }
    }