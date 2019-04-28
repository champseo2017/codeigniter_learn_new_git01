<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function login($uname,$pwd)
    {
        $this->db->where('uname', $uname);
        $this->db->where('password',md5($pwd));
        $res = $this->db->get('users');
        return $res->num_rows();
    }
}