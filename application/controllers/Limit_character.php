<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Limit_character extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        // การเลือกแสดงจำนวนสตริงโดยมีเงื่อนไข
        // substr(string $string, int $start, [, int $length]) เป็นฟังก์ชั่นสำหรับดึงสตริงย่อยออกมาจากสตริงหลัก 
        // $string คือ สตริงหลัก $start คือ ตำแหน่งที่ต้องการเริ่มดึงสตริงย่อยออกมา โดยตัวอักษรแรกจะเริ่มต้นที่ตำแหน่งที่ 0 
        // $length คือ ความยาวของสตริงย่อยที่ต้องการดึงออกมาจากสตริงหลัก
        $position=14; // กำหนดตัวอักษรที่ต้องการแสดง
        $message = "You are now joining over 2000 current";
        $post = substr($message,$position,1);  // substr(string $string, int $start, [, int $length]) เป็นฟังก์ชั่นสำหรับดึงสตริงย่อยออกมาจากสตริงหลัก 

        for ($i = 0; $i < strlen($message); $i++){
            echo $i." Key [index strung ] : ".$message[$i]."<br>"; // หา index ของสตริง
        }

        if($post !=" "){
         while($post != " ")
         {
             $i = 1;
             $position = $position + $i; // $position+1 (14+1=15, 15+1=16 until we found " "(space) that mean character 20)
             // position ตำแหน่งที่ 14 บวก 1 ไปเรื่อยๆ จนกว่าจะเจอค่าว่าง
             $message = "You are now joining over 2000 current"; // string หลัก
             $post = substr($message,$position,1); // ดึงสตริงย่อยออกมาที่ล่ะตัวจะได้ตำแหน่งสตริงที่เท่ากับค่าว่างจากนั้น
             // จะออกจาก loop จะได้ตำแหน่งที่เท่ากับค่าว่างที่เก็บอยู่ใน position
        
         }
        }

        $post_outloop = substr($message, 0, $position);
        
        echo $post_outloop."<br>";
        echo $position."Position out of the loop";
    }
}