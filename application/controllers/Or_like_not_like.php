<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Or_like_not_like extends CI_Controller {
    function __construct()
    {
        parent::__construct(); //ต้องมีกำกับไว้ถ้าเรียกใช้งานฟังก์ชั่น construct
        $this->load->model('Or_like_not_like_model', 'orlike');
    }
    public function index()
    {
        $res = $this->orlike->or_like();
        echo "<pre>";
        print_r($res);
        echo "</pre>";
    }
}