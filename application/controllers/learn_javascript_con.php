<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Learn_javascript_con extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Book_models', 'book');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    public function index ()
    {
      $this->load->view('learn_javascript');
    }

    public function random_num()
    {
        echo rand();
    }

    public function data_time ()
    {
        echo date("d-n-Y H:i:s");
    }
    
    public function chack_login ()
    {
        $login = strtolower($_POST["login"]);

        if(in_array(substr($login, 0, 1), range("a", "f")))
        {
            echo "Login: $login มีผู้ใช้แล้ว";

        }else{
            
            echo "Login: $login สามารถใช้ได้";
        }
    }

    public function login_ajax ()
    {
        if($_POST["login"] == "jquery" && $_POST["pswd"] == "ajax"){
            echo "SUCCESS";
        }else {
            echo "ERROR";
        }
    }

    public function delete_row ()
    {
        $id = $_GET["id"];
        echo "\$('[data-id=$id]').parent().parent().remove()";
    }

    public function cart_product ()
    {
        $a = array();
        // ถ้ามีข้อมูลเดิมเก็บอยู่ในเซลชั่นอยู่แล้ว ให้นำข้อมูลนั้นมาใช้อีก
        $sess_cart = $this->session->userdata('cart');
        if(isset($sess_cart)){$a = $sess_cart;}
        $id = $_POST['id'];
        $q = $_POST['q'];
        $b = array($id => $q); // ถ้าหยิบสินค้า #1 จำนวนเป็น 3 ชิ้นลักษณะที่ได้เช่น 'p1' => '3'
        $a = array_merge($a, $b); // ผนวกข้อมูลเดิม (กรณีมีในเซสชั่น) กับข้อมูลใหม่เข้าด้วยกัน
        echo json_encode($a);
        $this->session->set_userdata('cart', $a); // เก็บข้อมูลในเซสชั่น เผื่อมีการหยิบสินค้าครั้งต่อไปก็นำข้อมูลนี้มาใช้อีก
    }


}