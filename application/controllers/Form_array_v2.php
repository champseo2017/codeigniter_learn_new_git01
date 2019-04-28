<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Form_array_v2 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        echo "<form method='post' action='form_array_v2/get_form'>";
        echo "<input type='text' name='address[]'><br>";
        echo "<input type='text' name='address[]'><br>";
        echo "<input type='text' name='address[]'><br>";
        echo "<select name='hobbies[]' multiple>";
        echo "<option value='ดูหนัง'>ดูหนัง</option>";
        echo "<option value='ฟังเพลง'>ฟังเพลง</option>";
        echo "<option value='อ่านการ์ตูน'>อ่านการ์ตูน</option>";
        echo "</select>";
        echo "<button>ส่งข้อมูล</button>";
        echo "</form>";
    }
    public function get_form()
    {
        if($_POST)
        {
            $count = count($this->input->post('address')); //นับจำนวนอิลิเมนต์
            for($i = 0; $i < $count; $i++)
            {
                $address = $this->input->post('address');
                echo $address[$i] . "<br>";
            }
            
           
            foreach($_POST['hobbies'] as $key => $value)
            {   
                echo $key + 1 . " . " . $value . "<br>";
            }
            
        }
    }
}