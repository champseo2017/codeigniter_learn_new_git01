<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Checkdate extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index ()
    {
        //การตรวจสอบข้อมูลชนิดวันเวลา
        //ฟังก์ชั่น checkdate(month, date, year) สำหรับตรวจสอบว่าวันเดือนปีที่กำหนดนั้นมีอยู่จริงหรือไม่ซึ้งฟังก์ชั่นนี้นับว่าสำคัญ
        //มากในการป้องกันการกำหนดวันเดือนปีที่ไม่มีอยู่จริง 
        echo form_open('checkdate/check_date');
        echo "โปรดกรอก month <input name='month' type='text'><br>";
        echo "โปรดกรอกวันที่ day <input name='day' type='text'><br>";
        echo "โปรดกรอกวันที่ year <input name='year' type='text'><br>";
        echo "<input type='submit' value='Send Request'>";
        // $string = '</div></div>';
        echo form_close();
    }
    public function check_date ()
    {
        // ! เช็คฟังก์ชั่นว่ามีการกรอกข้อมูลว่าเป็นวันเดือนปีไหม โดยใช้เมธอด checkdate()
        if(!checkdate($_POST['month'],$_POST['day'],$_POST['year'])){
            echo "Invalid date";
        }else{
            echo "ถูกแล้ว";
        }
    }
    public function timestamp_little ()
    {
        // ในการเปรียบเทียบวันเวลานั้น เราไม่สามารถนำวันเวลาที่เขียนในแบบสตริงมาเปรียบเทียบกันได้โดยตรงได้แต่ต้องแปลง
        // ให้อยู่ในรูปแบบ timestamp โดยฟังก์ชั่น strtotime() ก่อนแล้วค่อยนำมาเปรียบเทียบกัน
        // หลักการเปรียบเทียบคือ วันเวลาที่มาก่อนจะมีค่า timestamp น้อยกว่า วันเวลาที่มาทีหลัง
        // ค่า timestamp ของวันที่ 1 มกราคม 2014 จะมีค่าน้อยกว่าค่า timestamp ของวันที่ 2 มกราคม 2014
        $expire = strtotime("7 December 2013");
        $now = strtotime("now");
        if( $now > $expire ) { echo "หมดอายุแล้ว"; }
        //ถ้าปัจจุบันวันที 31 Dec. 2013 แล้วแสดงว่าค่า timestamp ของปัจจุบันต้องมากกว่าแน่นอน
    }
}