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
                        if($name->username !== $data){
                                return true;
                        }else{
                                return false;
                        }
                }else{
                        return true;
                }
        }

        public function cek_email($data){
                $email = $this->db->get_where('tb_users', array('email' => $data));
                $mail = $email->row();
                if(isset($emil)){
                         if($mail->email !== $data){
                                return true;
                        }else{
                                return false;
                        }
                }else{
                        return true;
                }
        }       
}
?>