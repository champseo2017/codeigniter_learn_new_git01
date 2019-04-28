<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Radio_v1 extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        echo "<form action='radio_v1/get_radio' method='post'>";
        echo "<input type='radio' name='flower' value='Rose'>กุหลาบ"; //การอ่านข้อมูลชนิดอิลิเมนต์ชนิด radio (แอตทริบิวต์ checked กำหนดเฉพาะเมื่อต้องการให้รายการนั้นถูกเลือกไว้ล่วงหน้า)
        echo "<input type='radio' name='flower' value='Orchid'>กล้วยไม้"; //ค่าที่อ่านได้จะเป็นค่าที่เรากำหนดให้แก่แอตทริบิวต์ value ของอิลิเมนต์ที่ถูกเลือกเท่านั้น
        echo "<input type='radio' name='flower' value='Carnation'>คาร์เนชั่น";
        echo "<input type='submit' value='Submit'>";
        echo "</form>";
    }
    public function get_radio ()
    {
        if($_POST['flower'])
        {
            $f = $this->input->post('flower');
            echo "ดอกไม้ที่ท่านชื่นชอบที่สุดคือ: $f";
        }
    }
}