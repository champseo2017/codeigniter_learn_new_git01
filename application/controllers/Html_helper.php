<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Html_helper extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index ()
    {
      // นอกจากนั้นเรายังสามารถกำหนดค่าแอตทริบิวต์แบบอาเรย์ให้กับ form_input()
      // เช่น การกำหนดค่า class, id, type, value ผ่านตัวแปรแบบอารเย์ได้
      $attr = "onClick=\"hello()\"";
      $attr_a = array(
        'type' => 'hidden',
        'name' => 'myname',
        'size' => '50',
        'class' => 'myclass'
      );
      $value = 'gg';
      echo form_password($attr_a, $value, $attr);
    
    }
}