<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model', 'product');
    }
    public function index()
    {
        
        $feature_brogue_shoes = $this->product->getFeautureProduct(1, 4);
        $feature_toe_cap  = $this->product->getFeautureProduct(2, 4);
        $feature_monk_shoes = $this->product->getFeautureProduct(3, 4);
        $latest_product_home = $this->product->getFeautureProduct(4, 8);
        $getAllcat = $this->product->getAllCategory();
        // echo "<pre>";
        // print_r($getAllcat); exit();
        // echo "</pre>";
        $send_data = array(
            'sub_feature_brogue_shoes' => $feature_brogue_shoes,
            'sub_feature_toe_cap' => $feature_toe_cap,
            'sub_feature_monk_shoes' => $feature_monk_shoes,
            'sub_latest_product_home' => $latest_product_home,
            'category' => $getAllcat
        );
        $this->load->view('header/header');
        $this->load->view('home/home',$send_data);
        $this->load->view('footer/footer');
    }
}