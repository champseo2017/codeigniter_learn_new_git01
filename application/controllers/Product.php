<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('Product_model', 'product');
    }
    public function productDetails()
    {
        $pid = $this->input->get('pid');
        $prductdeatailsData = $this->product->productDetails($pid);
        $senddata_array = array(
            'proDetails' => $prductdeatailsData
        );
        $this->load->view('header/header');
        $this->load->view('product/product_detail', $senddata_array);
        $this->load->view('footer/footer');
    }
    public function searchProduct ()
    {
        $keyword = $this->input->post('searchpro');
        $cat_id = $this->input->post('cat_id');
        $searchProRes = $this->product->getSearchProResult($keyword,$cat_id);
        $res_array = array(
                'serch_res' => $searchProRes
        );
        $this->load->view('header/header');
        $this->load->view('product/searchProduct',$res_array);
        $this->load->view('footer/footer');
    }
    public function category()
    {
        $cat_id = $this->input->get('cat_id');
        $category = $this->product->getCategory($cat_id);
        $res_array = array(
                'category' => $category
        );
        $this->load->view('header/header');
        $this->load->view('category',$res_array);
        $this->load->view('footer/footer');
       
    }
}