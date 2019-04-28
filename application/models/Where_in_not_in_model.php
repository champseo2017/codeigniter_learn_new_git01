<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Where_in_not_in_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function where_not_in ()
    {
       $arr_in = array('Shout', 'memory', 'shoe');
       $arr_or = array('100', '50', '30');
       $query = $this->db->where('product_name', $arr_in)
                         ->or_where_in('product_price', $arr_or)
                         ->where_not_in('product_name', $arr_in) //ไม่เลือกเฉพาะค่าที่กำหนดใน $arr_in 
                         ->or_where_not_in('product_price', $arr_or) //ไม่เลือกเฉพาะค่าที่กำหนดใน $arr_or 
                         ->get('product')
                         ->result_array();
        return $query;
    }
}