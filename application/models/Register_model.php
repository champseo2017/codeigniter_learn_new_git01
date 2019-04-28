<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Register_model extends CI_Model {

    public function signupData($data)
    {

        $this->db->insert('users',$data);
        return $this->db->insert_id();

    }

}