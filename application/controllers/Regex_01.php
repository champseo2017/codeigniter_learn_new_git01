<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Regex_01 extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
       // การใช้ RegEx เพื่อการแทนที่
       // เป็นการตรวจสอบว่าภายในสตริงนั้นมีส่วนของสตริงที่ตรงกับแพตเทิรน์หรือไม่ ถ้ามีก็จะนำคำใหม่ไปแทนที่ส่วนของสตริงนั้น โดยใน PHP
       // preg_replace(แพตเทิร์น, สตริงที่จะใช้แทนที่, สตริงหลัก) เป็นการแทนที่สตริงที่มีแพตเทิร์นตรงตามที่ระบุด้วยสตริงใหม่ ผลลัพธ์ที่ส่ง
       // กลับมาจะเป็นสตริงผลลัพธ์หลังการแทนที่ แต่หากไม่มีการแทนที่ก็จะได้เป็นสตริงเดิม
       $str1 = "Regular Expression หรือ RegEx เป็นวิธีการตรวจสอบข้อมูลที่เริ่มในภาษา Perl ...";
       // ค้นหาคำว่า "regex" หรือ "regular expression"
       $find_pattern = "/(regex)|(regular expression)/i";

       /* \\0 ใช้อ้างถึงสตริงที่ตรงกับทั้งแพตเทิร์น หรือตรงกับทุก sub Pattern รวมกันนั่นเอง */
       $replace_pattern = "<b>\\0</b>";

       $str2 = preg_replace($find_pattern, $replace_pattern, $str1);

       echo "<h3>สตริงก่อนการแทนที่ : </h3>
            $str1
            <hr>
            <h3>สตริงหลังการแทนที่ : </h3>
            $str2";
    }
    public function RegEx_02 ()
    {
        echo form_open('Regex_01/Postback');
        echo "<label>ข้อความ</label>";
        echo "<button style='float: right;margin-right: 1144px;'>ส่งข้อมูล</button><br>";
        echo "<textarea  rows='9' cols='50' name='msg'></textarea>";
        // $string = '</div></div>';
        echo form_close();
    }
    public function Postback ()
    {
        // โค๊ด PHP สำหรับการ Postback 
        if($_POST)
        {
            $msg = $_POST['msg'];
            $msg = stripslashes($msg); // ตัด backslashe ออกจากสตริง ด้วยฟังก์ชัน stripslashes()
            $msg = htmlspecialchars($msg, ENT_QUOTES); // ป้องกันการใส่อักขระพิเศษ แปลง html ให้เป็น string
            $msg = nl2br($msg); // แปลง \n ให้เป็น <br>
            echo "<h3>ข้อความก่อนการแทนที่: </h3><div>$msg</div>";

            $pattern_url = "/(http(s?):\/\/)([a-z0-9\-]+\.)+[a-z]{2,4}"; // แพตเทิร์น
            $pattern_url .= "(\.[a-z]{2,4})*(\/[^ ]+)*/i";

            $replace_pattern = '<a href="\\0" target="_blank">\\0</a>'; // สตริงที่จะใช้แทนที่ \\0 ใช้อ้างถึงสตริงที่ตรงกับทั้งแพตเทิร์น หรือตรงกับทุก Sub Pattern
            $msg = preg_replace($pattern_url, $replace_pattern, $msg); // เมธอด preeg_replace(แพตเทิร์น, สตริงที่จะใช้แทนที่, สตริงหลัก)

            $pattern_eml = "/[a-z]([a-z0-9_\.])+([a-z0-9])+@([a-z0-9\-]+\.)+";
            $pattern_eml .= "([a-z]{2,4})(\.[a-z]{2,4})*/i";

            $replace_pattern = "<a href='mailto:\\0'>\\0</a>";
            $msg = preg_replace($pattern_eml, $replace_pattern, $msg);

            echo "<h3>ข้อความหลังการแทนที่ : </h3><div>$msg</div>";
            exit("</body></html>"); // หลังแสดงผล ปิดเพจแล้วหยุดการทำงานในส่วนที่เหลือ
        }
    }
}