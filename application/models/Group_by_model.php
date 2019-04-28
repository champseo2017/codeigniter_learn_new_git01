<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Group_by_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function group_by ()
    {
       $arr = array('product_name', 'cat_id'); 
       $result = $this->db->group_by($arr) // select value ค่าที่ไม่ซ้ำกันมาแสดง ตาม group by
                          ->get('product')
                          ->result_array();
    return $result;
    }

}