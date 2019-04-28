<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
class Book_models extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function _getUsers()
    {
        $result = $this->db->order_by("id", "asc");
        $result = $this->db->get('products');
        return $result->result_array();
    }
    function _select_update($id_book)
    {
        $result_select_book = $this->db->select('*')
        ->where('id', $id_book)
        ->get('products')
        ->result_array();
        return array(
            'select_book' => $result_select_book
        );
    }
    function _update_books ($id,$code,$name,$price)
    {
        $data = array(
            'code' => $code,
            'name' => $name,
            'price' => $price,
         );

        $result = $this->db->where('id', $id)
                         ->update('products', $data);
        return $result;
    }
    function _delete_book ($id_book)
    {
        $delete = $this->db->where('id', $id_book)
                  ->delete('products'); 
        return $delete;
    }
    function ajax_book_get ($data)
    {
        $code = $data[0]['code'];
        $name = $data[0]['name'];
        $price = $data[0]['price'];
       
        $data_array = array(
            'code' => $code,
            'name' => $name,
            'price' => $price
         );
         
         $result = $this->db->insert('products',$data_array);
         $result = $this->db->insert_id();
         $re = $this->result_id_max($result);
         return $re;
    }
    function result_id_max ($result)
    {
        $query = $this->db->select('*')
                ->where('id', $result)
                ->get('products')
                ->result_array();
        echo '<div class="alert alert-success" role="alert">'
                .'<strong>'.'<span>Your insert data : </span>'.'<span>Code: </span>'.$query[0]['code'].'<span> Name: </span>'.$query[0]['name'].'<span> Price: </span>'.$query[0]['price'].'</strong>'.
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>';
    }
}