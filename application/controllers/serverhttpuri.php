<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Serverhttpuri extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index ()
    {
        echo "<input value='{$_SERVER["HTTP_HOST"]}{$_SERVER["REQUEST_URI"]}'>";
    }
}