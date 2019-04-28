<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class Strlen_input extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index ()
    {
        //พื้นฐานการตรวจสอบข้อมูลทางด้านเซิร์ฟเวอร์
        //การตรวจสอบข้อมูลชนิดสตริง เมธอด strlen() สำหรับตรวจสอบว่าผู้ใช้ได้ใส่ข้อมูลในช่องอิลิเมนต์นั้นหรือไม่
        // return ในแบบการส่งค่ากลับ ฟังก์ชั่นการทำงาน -> return กลับ ด้วยตัวแปรหรือ ผลลัพธ์
        echo "<form action='strlen_input/strlen_input' method='post'>";
        echo "กรอกข้อมูล: <input type='text' name='str'>";
        echo "<input type='submit' value='Submit'>";
        echo "</form>";
    }
    public function strlen_input ()
    {
        //การตรวจสอบข้อมูลชนิดสตริง เมธอด strlen() สำหรับตรวจสอบว่าผู้ใช้ได้ใส่ข้อมูลในช่องอิลิเมนต์นั้นหรือไม่
        if(strlen($this->input->post('str')) == 0)
        {
            echo "Please enter string";
        }
    }
}