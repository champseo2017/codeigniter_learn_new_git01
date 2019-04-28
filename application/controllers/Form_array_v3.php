<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Form_array_v3 extends CI_Controller
{
     
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    
    
    public function registerForm()
    {
       $this->load->view('reg_oldvalue_v1');
    }
    public function save()
    {
        $config = array(
            array(
                    'field' => 'name',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'age',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'myradio',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'gender',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'groups[]',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a select box',
                ),
            ),
        );
        $this->form_validation->set_rules($config);
        // $rules = [        
        //     ['field' => 'groups[]', 'label' => 'groups', 'rules' => 'required']
        // ];
        // $this->form_validation->set_rules($rules);
        if($this->form_validation->run() == FALSE){
           
            $this->load->view('reg_oldvalue_v1');

        }else{
           if($_POST){

                $accept_terms_checkbox = $_POST['groups'];
                var_dump($accept_terms_checkbox);

           }
            // $result = $this->db->insert('tbl', $data_to_be_save);
            // if($result){
            //     echo "save";

            // }else{
            //     echo "no save";
            // }
        }

    }
   
}