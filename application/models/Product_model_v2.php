<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Product_model_v2 extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function select_product(){
        $sql = "select * from product_v2";
        $query = $this->db->query($sql)
                        ->result_array();
        return $query;
    }

    public function select_basket($sessionID, $addProductID){

       $data = $this->db->select('id')
                        ->from('basket')
                        ->where('sessionID', $sessionID)
                        ->where('productID', $addProductID)
                        ->get()
                        ->row();
        return $data;
    }

    public function insert_basket($sessionID, $addProductID){

        $data = array(
            'sessionID' => $sessionID,
            'productID' => $addProductID,
            'quantity' => 1
        );
        return $this->db->insert('basket',$data);
                        
    }

    public function update_basket($sessionID, $addProductID){

        return $this->db->set('quantity', 'quantity+1', FALSE)
                            ->where('sessionID', $sessionID)
                            ->where('productID', $addProductID)
                            ->update('basket');
        
    }

    public function left_join_product($sessionID){

        
        $querry = $this->db->select('*')
                            ->from('basket')
                            ->join('product_v2','product_v2.id = basket.productID')
                            ->order_by("basket.id", "asc")
                            ->where('basket.sessionID', $sessionID)
                            ->get()
                            ->result_array();
                            
        return $querry;
        
    }

    public function delete_product($sessionID, $removeProductID){

        $tables = array('basket');
        return $this->db->where('sessionID', $sessionID)
                          ->where('productID', $removeProductID)
                          ->delete($tables);
    }
}