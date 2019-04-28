<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Mysql_like extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mysql_like_model', 'like');
    }
    public function index()
    {
        $res = $this->like->mysql_like();
        echo "<pre>";
        print_r($res);
        echo "</pre>";
    }
}