<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Serach_not_found extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Book_models', 'book');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('header/header');
        $this->load->view('not_found');
        $this->load->view('footer/footer');
    }
}