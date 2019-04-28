<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Form_check_box extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index ()
    {
        //อิลิเมนต์ชนิด check box จะต่างจาก radio ตรงที่สามารถเลือกได้หลายรายการ ดังนั้นจึงไม่ต้องกำหนดแอตทริยิวต์ name ให้เหมือนกัน
        echo "<form action='form_check_box/get_checkbox' method='post'>";
        echo "<input type='checkbox' name='rose' value='Rose'>กุหลาบ";
        echo "<input type='checkbox' name='orchia' value='Orchid'>กล้วยไม้";
        echo "<input type='checkbox' name='carnation' value='Carnation'>คาร์เนชั่น";
        echo "<input type='submit' value='Submit'>";
        echo "</form>";

    }
    public function get_checkbox ()
    {
        //ตรวจสอบและอ่านข้อมูลจากอิลิเมนต์ชนิด checkbox 
        if($_POST['rose'])
        {
            $ro = $this->input->post('rose');
            echo $ro;
        }
        else if($_POST['orchia'])
        {
            $or = $this->input->post('orchia');
            echo $or;
        }
        else if($_POST['carnation'])
        {
            $ca = $this->input->post('carnation');
            echo $ca;
        }else{
            echo "No check box";
        }

    }
}