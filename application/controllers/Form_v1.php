<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Form_v1 extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index ()
    {
        $rand = mt_rand();
        echo "<h3>สมัครสมาชิก</h3>";
        echo "<form method='post' action='form_v1/get_form_reg'>";
        echo "<div>อีเมล (ล็อกอิน):<br><input type='text' name='login'></div>";
        echo "<div>รหัสผ่าน:<br><input type='password' name='password'></div>";
        echo "<br class='clear'>";
        echo "<div>ข้อมูลส่วนตัว";
        echo "<textarea name='info' cols='36' rows='2'></textarea>";
        echo "</div><br class='clear'>";
        echo "<div>";
        echo "<input type='hidden' name='code' value='$rand'>";
        echo "<button>ตกลง</button>";
        echo "</form>";
    }
    public function get_form_reg ()
    {
        if($_POST){
            $login = $this->input->post('login');
            $pswd = $this->input->post('password');
            $info = $this->input->post('info');
            $code = $this->input->post('code');
            if($login != "" && $pswd != "" && $info != "")
            {
                echo "<h4>การสมัครสมาชิกเสร็จเรียบร้อย<br>ข้อมูลของท่านคือ:</h4>
                Login: $login <br>
                Password: $pswd <br>
                Personal Info: $info <br>
                Code: $code";
            }
            else {
                echo "<p class='err'>
                        ท่านใส่ข้อมูลไม่ครบ</p>";
            }
        }
    }

}