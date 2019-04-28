<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Chap6 extends CI_Controller {
    function __construct(){
        parent::__construct(); //ต้องมีกำกับไว้ถ้าเรียกใช้งานฟังก์ชั่น construct
        $this->load->helper('form');
    }
    public function index ()
    {
       
        $this->load->view('search_postback');
       
    }
}
