<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Book extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Book_models', 'book');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    public function index ()
    {
        $data = array(
            'data_select' => $this->book->_getUsers()
        ); 
        $this->load->view('select_up_insert', $data);
    }
    public function select_update_book ($id_book)
    {
        $result_data = array(
            'result_data_book' => $this->book->_select_update($id_book)
        );
        $this->load->view('update_products', $result_data);
    }
    public function update_book ()
    {
        $id = $this->input->post('id');
        $code = $this->input->post('code');
        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $last_id = $this->book->_update_books($id,$code,$name,$price);
        if($last_id){
            $this->session->set_flashdata('UpdateSucess', 'You have sucessfully Update');
            redirect('book');
        }else{
            echo "update fail";
        }
    }
    public function delete_book($id_book)
    {
        $delete_id_book = $this->book->_delete_book($id_book);
        if($delete_id_book){
            $this->session->set_flashdata('DeleteSucess', 'You have sucessfully Delete');
            redirect('book');
        }else{
            echo "Delete fail";
        }
    }
    public function get_ajax_book ()
    {
        $data = $_POST['myData'];
        $last_id = $this->book->ajax_book_get($data); 
    }
}