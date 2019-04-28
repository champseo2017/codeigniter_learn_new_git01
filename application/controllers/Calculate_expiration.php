<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Calculate_expiration extends CI_Controller {
    function __construct(){
        parent::__construct(); //ต้องมีกำกับไว้ถ้าเรียกใช้งานฟังก์ชั่น construct
        $this->load->helper('form');
    }
    public function index ()
    {
        date_default_timezone_set('Asia/Bangkok');
        $date_day = date();
        $datetime_compare = "2019/01/29 12:00";
        $ts = strtotime($datetime_compare);  //strtotime() //แปลงสตริงเป็น timestemp
        $now = strtotime('now');  //วันเวลาปัจจุบัน หรือ เมธอด date() เวลาปัจจุบันของ server
        $diff = $now - $ts;
        // echo date('l, h:i:s A'); //DATE() วันปัจจุบันบนเซิฟเวอร์
        echo $diff;
        $second = 1;
        $minute = 60 * $second;
        $hour = 60 * $minute;
        $day = 24 * $hour;
        $yesterday = 48 * $hour;
        $month = 30 * $day;
        $year = 365 * $day;
        $ago = "";

        $date = new DateTime($date_day); //ส่งตัวแปร datetime เข้าฟังก์ชั่นมาแสดง
        echo $date->format('m/d/Y h:i:s a'); //จัดฟอแมตแสดงผลข้อมูล

    
        $ago = intval($diff/$day);
        
        
       
    }
}