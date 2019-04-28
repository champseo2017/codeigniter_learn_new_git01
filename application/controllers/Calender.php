<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Calender extends CI_Controller {

    function __construct(){
        parent::__construct();
        $config = array(

                'local_time' => time(),
                'start_day' => 'sunday',
                'month_type' => 'sort',
        );
        $this->load->library('calendar', $config);

    }

    function index(){
        echo $this->calendar->generate();
    }

}

/* 
การกำหนดค่า Calender
การกำหนดค่าเพิ่มเติมสำหรับไลบรารี Calender สามารถกำหนดค่าได้ทั้งในส่วน
ของการโหลดไลบรารี โดยกำหนด
ในฟังก์ชั่น $this->load->library() 
หรือตอนที่เราสร้าง
ปฏิทินจากฟังก์ชั่น $this->calender->generate()

การกำหนดค่าในฟังก์ชั่น $this->load->library() ให้ใช้คำสั่งดังนี้

$this->load->library('calender', $config);

$config เป็นการกำหนดค่าเพื่อใช้ในการสร้างปฏิทิน

ตัวอย่างการใช้งานเช่น 
function __construct(){

$config = array(
    'start_day' => 'sunday',
    'month_type' => 'long',
    'day_type' => 'long'
);

$this->load->library('calender', $config);

}

function index()
{
    echo $this->calender->generate();
}


*/