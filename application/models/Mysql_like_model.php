<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Mysql_like_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function mysql_like ()
    {
       //like mysql format %ไม่สนคำหน้าคำหลัง 'ขอให้มีประโยคนี้อยู่ข้างใน' %
       //like mysql format ไม่สนคำคำหลัง 'ขอให้มีประโยคนี้อยู่ข้างใน' %
       //like mysql format %ไม่สนคำด้านหน้า 'ขอให้มีประโยคนี้อยู่ข้างใน' 
       //like mysql format ไม่มี % fixประโยคนี้ไว้ค้นหาแค่คำนี้ 'ประโยคนี้อยู่ข้างใน' 
       // format mysql like
       // $this->db->like($field, $match = '', $side = 'both')
       // $field ชื่อฟิลด์ที่ต้องการเปรียบเทียบ $match ข้อความหรือคำที่ต้องการค้นหา $side การวางตำแหน่งของเครื่องหมาย % ที่ใช้ในเงื่อนไข like
       
       $array_like = 'Shout';
       $query = $this->db->like('product_name',$array_like)
                         ->like('product_name',$array_like, 'both')  //ไม่กำหนดค่าปกติคือ both % text %
                         ->like('product_name',$array_like, 'before') //กำหนด before %text
                         ->like('product_name',$array_like, 'after') //กำหนด after text%
                         ->get('product')
                         ->result_array();
        // echo $this->db->last_query(); exit();
        return $query;
    }
}