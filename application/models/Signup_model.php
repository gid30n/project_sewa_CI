<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Signup_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function insert_user($data)
        {
                return $this->db->insert('tb_users', $data) ? $this->db->insert_id() : false;
        }
        public function insert_business($data)
        {
                return $this->db->insert('tb_business_profile', $data) ? $this->db->insert_id() : false;
        }

        public function cek_username($data){
                $uname = $this->db->get_where('tb_users', array('username' => $data));
                $name = $uname->row();
                if(isset($name->username)){
                        if($name->username === $data){
                                return false;
                        }else{
                                return true;
                        }
                }else{
                        return true;
                }
        }

        public function cek_brand($data){
                $brand = $this->db->get_where('tb_business_profile', array('brand_name' => $data));
                $br = $brand->row();
                if(isset($br->brand_name)){
                        if($br->brand_name === $data){
                                return false;
                        }else{
                                return true;
                        }
                }else{
                        return true;
                }
        }

        public function cek_email($data){
                $email = $this->db->get_where('tb_users', array('email' => $data));
                $mail = $email->row();
                if(isset($mail)){
                        if($mail->email === $data){
                                return false;
                        }else{
                                return true;
                        }
                }else{
                        return true;
                }
        }       
}
?>