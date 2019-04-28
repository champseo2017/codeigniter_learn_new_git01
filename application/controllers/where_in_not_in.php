<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Where_in_not_in extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Where_in_not_in_model', 'wheredb');
    }
    public function index()
    {
        $res = $this->wheredb->where_not_in();
        echo "<pre>";
        print_r($res);
        echo "</pre>";
    }
}