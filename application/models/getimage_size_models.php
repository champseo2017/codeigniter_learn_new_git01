<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Getimage_size_models extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function image_size()
    {
        $query = $this->db->query("SELECT * FROM product ORDER BY product_id DESC LIMIT 1");
        $result = $query->result_array();
        return $result;
    }
}