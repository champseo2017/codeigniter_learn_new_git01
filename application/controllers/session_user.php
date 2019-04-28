<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Session_user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Session_user_models', 'session_db');
    }
    public function index()
    {
        date_default_timezone_set('Asia/Bangkok');
        $my_session_id = $_GET['session_id']; //gets the session ID successfully
        $res = $this->session->userdata('session_id', $my_session_id);//it won't set the session with my id.
        $session_user = $this->session->userdata($res);
        $session_id = $session_user['__ci_last_regenerate']; //session user id
        $time=time();
        $time_check=$time-600; //SET TIME 10 Minute
        $select_session = $this->session_db->session_user_db($session_id,$time,$time_check);
        $res_array = array(
            'user_online' => $select_session
        );
        $this->load->view('user_online', $res_array);
        // echo "<pre>";
        // print_r($res_array);
        // echo "</pre>";
        

    }
}