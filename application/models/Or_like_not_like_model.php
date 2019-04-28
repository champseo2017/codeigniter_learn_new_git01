<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Or_like_not_like_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function or_like ()
    {
        //ไม่เลือกเฉพาะค่าที่กำหนดใน $text 
        $text = 'Shout';
        $query = $this->db->like('product_name', $text)
                          ->or_like('product_name', $text, 'both') 
                          ->not_like('product_name', $text, 'before') //ไม่เลือกเฉพาะค่าที่กำหนดใน $text 
                          ->or_not_like('product_name', $text, 'after') //ไม่เลือกเฉพาะค่าที่กำหนดใน $text 
                          ->get('product')
                          ->result_array();
        return $query;
        // echo $this->db->last_query(); exit();
    }

}