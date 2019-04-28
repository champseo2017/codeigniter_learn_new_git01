<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Select_data extends CI_Model {
    function __construct() 
    {
        parent::__construct();
    }
    public function selectdata()
    {
        $select_all = $this->db->get('category');
        $query = $select_all->result_array();
        return $query;
    }
    public function select_where()
    {
        $category = array('cat_id'=>'1');
        $select_where_1 = $this->db->get_where('category', $category);
        $query = $select_where_1->result_array();
        return $query;
    }
    public function or_like ()
    {
        $category = array('cat_id =' => '1', 'cat_name LIKE' => '%clothes%');
        $select_where = $this->db->get_where('category', $category);
        $query = $select_where->result_array();
        // echo $this->db->last_query(); exit();
        if($query)
        {
          return $query;
        }
        else
        {
          return $query;
        }
    }
    public function select_field()
    {
        $field = "cat_id, cat_desc";
        $select_db = $this->db->select($field,'');
        $query = $this->db->get('category');
        $res = $query->result_array();
        // echo $this->db->last_query(); exit();
        return $res;
    }
    public function select_sum ()
    {
        $sql = 'select id, code, name,SUM(price * qty) as s_Total FROM products';
        $query = $this->db->query($sql)->result_array();
        return $query;
    }
    public function select_min ()
    {
        $query = $this->db->select_min('price', 'MinPrice')
                            ->get('products');
        // echo $this->db->last_query(); exit();
        return $query->result_array();
         
    }
    public function select_max ()
    {
        $query = $this->db->select_max('price', 'MaxPrice')
                            ->get('products')
                            ->result_array();
        // echo $this->db->last_query(); exit();
        return $query;
    }
    public function select_avg ()
    {
        $query = $this->db->select_avg('price','AVGprice')
                            ->get('products')
                            ->result_array();
        // echo $this->db->last_query(); exit();
        return $query;
    }
    public function select_sum2 ()
    {
        $query = $this->db->select_sum('price', 'SUMprice')
                            ->get('products')
                            ->result_array();
        return $query;
    }
    public function select_where_2 ()
    {
        $query = $this->db->where('code', '001')
                      ->where('name LIKE', '%book01')
                      ->where('category =', 5)
                      ->get('products')
                      ->result_array();
        return $query;
    }
}