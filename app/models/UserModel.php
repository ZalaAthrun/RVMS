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
            $this->db->select('*');
            $this->db->from('users');
            $this->db->join('roles', 'users.role = roles.id');
            $this->db->where('username',$this->username);
            $this->db->where('password',sha1($this->password));
            $user = $this->db->get();
            if($user->num_rows()==1){
                $user_login = $user->result_array();
                return $user_login[0];
            }else{
                return false;
            }
        }

        public function getAllUser(){
            $this->db->select('*');
            $this->db->from('users');
            $this->db->join('roles','users.role=roles.id');
            $user = $this->db->get();
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
            $this->db->delete('users',$user);
            return true;
        }
        public function changePassword(){
            $user = array(
                "password" => sha1($this->password)
            );
            $this->db->where('id',$this->id);
            $this->db->update('users',$user);
            return true;
        }
    }
