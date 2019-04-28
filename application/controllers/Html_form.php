<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Html_form extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
      
       echo "วันที่: <input type='date' name='date'><br>";
       echo "เวลา: <input type='time' name='time'><br>";
      
    }

}