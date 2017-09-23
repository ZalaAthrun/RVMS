<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class UserModel extends CI_Model {
        public $id;
        public $name;
        public $username;
        public $email;
        public $password;
        public $role;

        public function login(){
            $user = $this->db->get_where('users',array('username'=>$this->username, 'password'=>sha1($this->password)));
            if($user->num_rows()==1){
                return $user->result();
            }else{
                return false;
            }
        }
    }
