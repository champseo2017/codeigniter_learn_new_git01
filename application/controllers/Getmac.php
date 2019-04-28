<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Getmac extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
       
    }
    public function index()
    {
        ob_start();
        system('getmac');
        $Content = ob_get_contents();
        ob_clean();
        return substr($Content, strpos($Content,'\\')-20, 17);
    }
    public function get_php()
    {
        echo $this->index();
    }
}