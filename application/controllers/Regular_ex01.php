<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Regular_ex01 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
      
    }
    public function index()
    {
        echo "<form method='post' action='Regular_ex01/get_input'>";
        echo "<input type='text' name='code' title='ใส่ตัวเลข 0-9 จำนวน 10 ตัว'>";
        echo "<button type='submit' value='Submit'>Submit</button>";
        echo "</form>";
    }
    
    public function get_input ()
    {
        // เมธอด preg_match(แพตเทิร์น, สตริง) ตรวจสอบว่ามีส่วนของสตริงที่ระบุตรงกับแพตเทิร์นหรือไม่ 
        // หากมีจะได้ผลลัพธ์เป็น 1 ( เทียบเป็นค่า true ได้ ) แต่หากไม่มีจะได้เป็น 0
        if(isset($_POST['code']))
        {

            $pattern = "/.*a$/";  

            // แพตเทิร์น .*a$ 
            // แพตเทิรน์นี้แยกคิดเป็น 2 กลุ่มคือ
            // .* หมายถึงอักขระไดๆ จำนวนกี่ตัวก็ได้
            // a$ หมายถึงต้องลงท้ายด้วย a

            $str = $_POST['code'];
            if(preg_match($pattern,$str))
            {
                echo "String is valid";
            }else{
                echo "NO";
            }
        }
    }

    public function pregsplit()
    {
        // ใช้ในการคัดแยกสตริงคล้ายกับ explode () แต่สามารถกำหนดแพตเทิร์นของสิ่งที่จะใช้คัดแยกได้ 
        // โดยเฉพาะอย่างกรณี ที่จะใช้คัดแยกมีหลายลักษะณะ 
        // การใช้งานร่วมกับ php จะเขียนในรูปแบบสตริงและต้องปิดหัวท้ายด้วย "/..../" เสมอ แต่ถ้าเราไม่สนใจตัวพิมพ์เล็กพิมพ์ใหญ๋ ให้ใส่แฟล็ก i ไว้ข้างหลัง ปิด /i
        $pattern = "/-|\//"; 
        // / ถ้าเราใช้ อักขระพิเศษของ RegEx หรือ อักขระพิเศษของสตริง เราจะต้องวางเครื่องหมาย / ไว้ข้างหน้า อัขระพิเศษ
        // | หรือ ใช้คั่นสตริงที่ต้องการให้มีเช่น a|b|c หมายถึง a หรือ b หรือ c
        $date = "2014/06/07"; // หรืออาจเป็น 2014-06-07
        $dt = preg_split($pattern, $date); // คืนค่าเป็น array โดยแยกโดย $pattern
        echo "<pre>";
        print_r($dt);
        echo "</pre>";
    }

    public function form_ex_01 ()
    {
        if($_POST)
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $mobile = $_POST['mobile'];

            $err = "";
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $err .= "<li> อีเมลไม่ตรงตามรูปแบบ </li>";
            }

            $pswd_pattern = "/^[a-z0-9]{5,15}$/i";
            if(!preg_match($pswd_pattern, $password))
            {
                $err .= "<li> รหัสผ่านต้องประกอบด้วยตัวอักษร a-z หรือ A-Z หรือ 0-9 จำนวน 5-15 ตัว </li>";
            }

            $mobile_pattern = "/^0[89]{1}[0-9]{8}$/";
            if(!preg_match($mobile_pattern, $mobile)){
                $err .= "<li> เบอร์มือทือไม่ตรงตามรูปแบบ </li>";
            }
            if ($err != "")
            {
                echo "<div><h3>ข้อผิดพลาด</h3><ul> $err </ul></div>";
            }else{
                echo "เยียม";
            }
        }
        echo form_open('Regular_ex01/form_ex_01');
        echo "<label> อีเมล </label><input type='text' name='email' placeholder='สำหรับเป็น login' required><br>";
        echo "<label> รหัสผ่าน </labal><input type='text' name='password' placeholder='a-z หรือ A-Z หรือ 0-9 จำนวน 5-15 ตัว' required><br>";
        echo "<label> มือทือ </label><input type='text' name='mobile' placeholder='089xxxxxxx แค่เบอร์เดียว' required><br>";
        echo "<button>Submit</button>";
        echo form_close();
        
    }
   
}