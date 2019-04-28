<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Facebook_login_test extends CI_Controller {
    function __construct(){
        parent::__construct(); //ต้องมีกำกับไว้ถ้าเรียกใช้งานฟังก์ชั่น construct
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view('facebook_login_v1');
    }

}