<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Session_user_models extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function session_user_db ($session_id,$time,$time_check)
    {
        $sql = $this->db->select('*')
                        ->where('session',$session_id)
                        ->get('session_user');
        $count = $sql->num_rows();
        $data_array = array(
            'session' => $session_id,
            'time' => $time,
         );
        // print_r($session_id); exit();
        if($count == "0"){
            $sql1 = $this->db->insert('session_user',$data_array);
             
        }else{

            $time_date = array(
                'time' => $time
            );
           
            $sql2 = $this->db->where('session',$session_id)
                             ->update('session_user', $time_date); 
        }
        $sql3 = $this->db->select('*')
                  ->get('session_user');
        $count_user_online_time = $sql3->result_array();
      
        // if over 10 minute, delete session 
        $sql4 = $this->db->where('time <', $time_check)
                        ->delete('session_user');
        
        return $count_user_online_time;
        
        // echo $this->db->last_query(); exit();
    }
    
}