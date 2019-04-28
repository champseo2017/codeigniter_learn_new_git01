<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Product_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function getFeautureProduct($type_id, $limit)
    {
        $this->db->where('product_type',$type_id);
        $this->db->limit($limit);
        $res = $this->db->get('product');
        // echo $this->db->last_query(); exit(); //ดักเพื่อดู SQL ที่มันทำงาน ว่าตรงกับที่คิดหรือเปล่า
        return $res->result_array();
    }

    public function productDetails($pid)
    {
        $this->db->where('product_id', $pid);
        $res = $this->db->get('product');
        return $res->row_array(); //ข้อมูลเดียว
    }
    public function getAllCategory ()
    {
        $res = $this->db->get('category');
        return $res->result_array();
    }
    public function getSearchProResult($keyword, $cat_id)
    {
       if($keyword !=""){
        $this->db->like('product_name',$keyword);
       }
       if($cat_id !="") {
        $this->db->where('cat_id',$cat_id);
       }
       $res = $this->db->get('product');
       //echo $this->db->last_query(); exit();
       return $res->result_array();
    }
    public function getCategory ($cat_id)
    {
       
        $query = $this->db->where('cat_id',$cat_id)
                            ->get('product')
                            ->result_array();
        //echo $this->db->last_query(); exit();
        return $query;
    }
}