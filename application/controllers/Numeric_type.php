<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Numeric_type extends CI_Controller {
    function __construct(){
        parent::__construct(); //ต้องมีกำกับไว้ถ้าเรียกใช้งานฟังก์ชั่น construct
    }
    public function index()
    {
        echo form_open('numeric_type/check_type');
        echo "โปรดกรอกตัวเลข <input name='age' type='text'>";
        echo "<input type='submit' value='Send Request'>";
        // $string = '</div></div>';
        echo form_close();
    }
    public function check_type ()
    {
        // โอปาเรตอร์เชิงตรรกะ เครื่องหมายนิเสธ หรือ Not ! ให้ค่าตรงข้ามกับเงื่อนไข !is_numeric เป็นตัวเลข TRUE = FALSE  เครื่องหมาย ! ให้ค่าตรงข้าม
        //การตรวจสอบข้อมูลชนิดตัวเลข
        if(!is_numeric($_POST['age'])){ // ตรวจสอบว่าเป็นตัวเลขหรือไม่ หากใช้จะคืนค่า true
                echo "อายุต้องเป็นตัวเลขเท่านั้น";
        }else{
                echo "เย้อายุเป็นตัวเลข";
        }
        
        // if( preg_match('/^[0-9]+$/', $_POST['age']) ){ //ตรวจสอบว่าเป็นตัวเลขจำนวนเต็มหรือไม่ 0-9
        //    echo "number";
        //  }else{
        //      echo "not number";
        //  }
        
        // ตรวจสอบว่าเป็นตัวเลขทศนิยมหรือไม่
        // if(strpos($_POST['age'],".") !== false){ // ค้นหาตำแหน่งแรกของคำในสตริง ด้วยฟังก์ชัน strpos() ค้นหาคำใน string return ตำแหน่งคำที่ค้นหาออกมา
        //     echo "is decimal";
        // }else{
        //     echo "not a decimal";
        // }
    }
}