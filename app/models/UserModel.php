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

        public function getAllUser(){
            $user = $this->db->query("SELECT user.id, user.name, user.username, user.email, user_role.description as role
                    FROM users user LEFT JOIN roles user_role ON user.role = user_role.id");
            return $user->result();
        }

        public function add(){
            $user = array(
                "username" => $this->username,
                "email" => $this->email,
                "password" => sha1($this->password),
                "name" => $this->name,
                "role" => $this->role
            );
            $this->db->insert('users',$user);
            return true;
        }
        public function delete(){
            $user = array(
                "id" => $this->id
            );
            $this->db->remove('users',$user);
            return true;
        }
    }
