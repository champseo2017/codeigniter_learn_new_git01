<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Group_by extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Group_by_model', 'groupby');
    }
    public function index()
    {
        $res = $this->groupby->group_by();
        echo "<pre>";
        print_r($res);
        echo "</pre>";
    }
}