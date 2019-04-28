<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class Function_pass1 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index ()
    {
         $this->pass_value(30);
         echo "My name is Champ <br>";
         echo "My surname is Champ hi hi <br>";
         echo "Hello everybody <br>";
         $this->pass_value(30);
    }
    public function pass_value ($no)
    {
        //การใช้ฟังก์ชั่นโดยมีการส่งผ่านค่า pass_vlaue(30) -> function pass_value($no)
        $sign = "";
        for($count = 1; $count <= $no; $count++)
        {
           //echo $count; //run ตัวเลข 1-30;
           $sign = $sign."*"; // run ดอกจันมา 30 ดอกจัน
        }
        // return $sign . "<br>"; // return ค่ากลับไปที่เรียกใช้งานฟังก์ชั่นผ่านไว้ในตัวแปร (หรือ เราจะเอา ตัวแปรจากค่าที่ retun ไปทำงานต่อ)
        echo "$sign  <br>"; // return เป็นผลลัพธ์
    }
}