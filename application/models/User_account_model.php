<?php if(! defined ('BASEPATH')) exit('No direct script access allowed');
class User_account_model extends CI_Model {

    // private $table = "user";
    // private $_data = array();
    function __construct() 
    {
        parent::__construct();
    }

    public function select_user($u_name, $u_pass)
    {
        $sql = $this->db->where('user_name', $u_name)
                                ->where('user_pass', $u_pass)
                                ->get('tbl_user');
        return $sql;
    }
    
    public function update_login_status ($user_id_ses)
    {
        #Update ( $this->db->update($table='', $set = Null, $where = Null, $limit = Null) )
        $data = array(
            'user_datetime_using' => date("Y-m-d H:i:s"),
        );
        return $this->db->update('tbl_user', $data, array('user_id' => $user_id_ses));
    }

    public function no_users_logging ($user_id_ses)
    {
         #Update ( $this->db->update($table='', $set = Null, $where = Null, $limit = Null) )
         $data = array(
            'user_login_status' => 1,
            'user_datetime_using' => date("Y-m-d H:i:s")
        );
        return $this->db->update('tbl_user', $data, array('user_id' => $user_id_ses));
    }

    public function check_m_loginuser ($session_checkloginuser)
    {
        // ให้อัพเดทเวลาที่ใช้อยู่ปัจจุบัน กับ สถานะการล็อกอิน
        $data = array(
            'user_login_status' => 1,
            'user_datetime_using' => date("Y-m-d H:i:s")
        );
        $this->db->update('tbl_user', $data, array('user_id' => $session_checkloginuser));    
        echo date("Y-m-d H:i:s");   
    }

    public function log_out ($user_logout)
    {
        #Update ( $this->db->update($table='', $set = Null, $where = Null, $limit = Null) )
        #อัพเดทสถานะการล็อกอิน
         $data = array(
            'user_login_status' => 0
        );
        return $this->db->update('tbl_user', $data, array('user_id' => $user_logout));
    }
}