<?php if(! defined ('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
    function __construct(){
        parent::__construct(); //ต้องมีกำกับไว้ถ้าเรียกใช้งานฟังก์ชั่น construct
    }
    public function index(){
    $this->load->library('session');
    $this->load->library('form_validation');
    $this->form_validation->set_rules("username", "Username", "trim|required");
    $this->form_validation->set_rules("password", "Password", "trim|required");
    if ($this->form_validation->run() == true)
    {
        $this->load->model('auth_model', 'auth');
        // check the username & password of user
        $status = $this->auth->validate();
        if($status == ERR_INVALTD_USERNAME)
        {
            $this->session->set_flashdata("error", "Username is invalid");
        }else if($status == ERR_INVALTD_PASSWORD)
        {
            $this->session->set_flashdata("error", "Password is invalid");
        }else {
            // success
            // store the user data to session
            $this->session->set_userdata($this->auth->get_data());
            $this->session->set_userdata("logged_in", true);
            // 
            redirect("dashboard");
        }
    }
    $this->load->view("header");
    $this->load->view("auth");
    $this->load->view("footer");
    }
    public function logout()
    {
        $this->session->unset_userdata("logged_in");
        $this->session->sess_destroy();
    }

}