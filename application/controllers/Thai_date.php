<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class Thai_date extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function thai_date($datetime_string)
    {
       $ts = strtotime($datetime_string);
       if(!$ts)
       {
            // return array(); //กรณีแปลงเป็น timestamp ไม่ได้
            return false;
       }
       $days = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
       $months = array(1=>"มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
       $months_short = array(1=>"ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
       $d = date('w', $ts);
       $day = $days[$d];
       $date = date('j', $ts);
       $m = date('n', $ts);
       $month = $months[$m];
       $month_short = $months_short[$m];
       $year = date('Y', $ts) + 543;
       return array('day'=>$day, 'date'=>$date, 'month'=>$month, 'year'=>$year, 'month_short'=>$month_short);
    }
    public function show_date()
    {
        $td = $this->thai_date('now');
        
        if($td == false){

            echo "ไม่สามารถคำนวณวันที่ผลิตได้<br>"; 
        }else{
            echo "วันที่ผลิต " .$td['date']." ".$td['month']." ".$td['year']."<br>";
        }
		
        $td = $this->thai_date('+ 180 days');

        if($td == false) {
            echo "ไม่สามารถคำนวณวันที่หมดอายุได้"; 
        }else{
            echo "วันหมดอายุ {$td['date']} {$td['month']} {$td['year']}"; 
        }
        
    }

}