<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('header/header');
        $this->load->view('reg');
        $this->load->view('footer/footer');
    }
    public function signup()
    {
        // print_r($this->input->post()); exit();
        $uname = $this->input->post('uname');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_confirmation = $this->input->post('password_confirmation');
        $is_new_customer = $this->input->post('is_new_customer');
        $email_create = $this->input->post('email_create');

        $this->form_validation->set_rules('uname','uname','required|is_unique[users.uname]|min_length[4]',
        array('required' => 'You have not provided Username', 'is_unique' => 'This %s already exists.', 'min_length' => 'user ห้ามต่ำกว่า 4 ตัวอักษร')
        );
        $this->form_validation->set_rules('first_name','first_name','required',
        array('required' => 'You have not provided First name.')
        );
        $this->form_validation->set_rules('last_name','last_name','required',
        array('required' => 'You have not provided Last name')
        );
        $this->form_validation->set_rules('email','email','required',
        array('required' => 'You have not provided Email')
        );
        $this->form_validation->set_rules('password','password','required|min_length[6]',
        array('required' => 'You have not provided Password','min_length' => 'Password ห้ามต่ำกว่า 6 ตัวอักษร')
        );
        $this->form_validation->set_rules('password_confirmation','password_confirmation','required|min_length[6]|matches[password]',
        array('required' => 'You have not provided Password confirmation','min_length' => 'Password ห้ามต่ำกว่า 6 ตัวอักษร', 'matches' => 'รหัสผ่านไม่ตรงกัน')
        );

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('header/header');
            $this->load->view('reg');
            $this->load->view('footer/footer');

        }else{
            $this->load->model('Register_model');
            $data = [
                'uname' => $uname,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => MD5($password),
                'password_confirmation' =>  MD5($password_confirmation),
                'ip' => $this->input->ip_address(),
                'is_new_customer' => $is_new_customer,
                'email_create' => $email_create,
            ];
            $last_id = $this->Register_model->signupData($data);
            if($last_id)
            {
                $this->session->set_flashdata('signupSucess', 'You have sucessfully Register Please login');
                redirect('login');
            }

        }

    }
}