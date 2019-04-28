<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class Trim_input extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index ()
    {
        //พื้นฐานการตรวจสอบข้อมูลทางด้านเซิร์ฟเวอร์
        //เมธอด trim() เพื่อตัดช่องว่างก่อนและหลังสตริงออก 
        //เพื่อป้องกันกรณีผู้ใช้ใส่เป็นช่องว่างแทนที่จะใส่เป็นอักขระ แล้วค่อยใช้ฟังก์ชั่น strlen() ตรวจสอบความยาว 
        echo "<form action='trim_input/trim_input' method='post'>";
        echo "กรอกข้อมูล: <input type='text' name='email'>";
        echo "<input type='submit' value='Submit'>";
        echo "</form>";
    }
    public function trim_input ()
    {
        // การตรวจสอบช่องว่างก่อนและหลัง input ด้วย เมธอด trim() เพื่อป้องกันกรณีผู้ใช้ใส่เป็นช่องว่างแทนที่จะใส่เป็นอักขระ แล้วค่อยใช้ฟังก์ชั่น strlen() ตรวจสอบความยาว == 0
        // เมธอด trim() เพื่อตัดช่องว่างก่อนและหลังสตริงออก
        if(strlen(trim($this->input->post('email'))) == 0)
        {
            echo "Please enter email";
        }else{
            $string = $this->input->post('email');
            var_dump($string);
        }
    }
}