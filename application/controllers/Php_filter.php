<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Php_filter extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index ()
    {
        //การตรวจสอบข้อมูลชนิดวันเวลา
        //ฟังก์ชั่น checkdate(month, date, year) สำหรับตรวจสอบว่าวันเดือนปีที่กำหนดนั้นมีอยู่จริงหรือไม่ซึ้งฟังก์ชั่นนี้นับว่าสำคัญ
        //มากในการป้องกันการกำหนดวันเดือนปีที่ไม่มีอยู่จริง 
        echo form_open('Php_filter/check_filter');
        echo "โปรดกรอก email <input name='email' type='text'><br>";
        echo "โปรดกรอก url <input name='url' type='text'><br>";
        echo "โปรดกรอก Ip <input name='ip' type='text'><br>";
        echo "<input type='submit' value='Send Request'>";
        // $string = '</div></div>';
        echo form_close();
    }
    public function check_filter ()
    {
        $eml = $_POST['email'];
        $url = $_POST['url'];
        $ip = $_POST['ip'];

        if(!filter_var($eml, FILTER_VALIDATE_EMAIL )){
            echo "Email is not valid <br>";
        }else{
            echo "Email ถูกแล้ว";
        }
        
        if(!filter_var($url, FILTER_VALIDATE_URL))
        {
            echo "URL is not valid <br>";
        }else{
            echo "รูปแบบ URL ถูกแล้ว";
        }

        if(!filter_var($ip, FILTER_VALIDATE_IP))
        {
            echo "รูปแบบ IP ไม่ถูกต้อง";

        }else{
            echo "รูปแบบ IP ถูกแล้ว";
        }
    }
   
}