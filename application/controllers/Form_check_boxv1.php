<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Form_check_boxv1 extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        echo "<form action='form_check_boxv1/get_form_check' method='post'>";
        echo "<h3>วิธีชำระเงิน *</h3>";
        echo "<input type='radio' name='payment' value='credit'>บัตรเครดิต";
        echo "<select name='credit'>";
        echo "<option value='VISA'>VISA</option>";
        echo "<option value='MasterCard'>MasterCard</option>";
        echo "</select>";
        echo "<input type='radio' name='payment' value='bank'>โอนเงินผ่านธนาคาร";
        echo "<select name='bank'>";
        echo "<option value='กรุงเทพ'>กรุงเทพ</option>";
        echo "<option value='กสิกรไทย'>กสิกรไทย</option>";
        echo "<option value='ไทยพาณิชย์'>ไทยพาณิชย์</option>";
        echo "</select>";
        echo "<h3>วิธีจัดส่ง *</h3>";
        echo "<input type='radio' name='delivery' value='EMS'>EMS";
        echo "<input type='radio' name='delivery' value='ลงทะเบียน'>ลงทะเบียน";
        echo "<h3>ท่านรู้จักเราทาง</h3>";
        echo "<input type='checkbox' name='search' value='Search Engine'>Search Engine <br>";
        echo "<input type='checkbox' name='social' value='Social Media'>Social Media<br>";
        echo "<input type='checkbox' name='email' value='Forward Email'>Forward Mail<br><br>";
        echo "<button>ส่งข้อมูล</button>";
        echo "</form>";
    }
    public function get_form_check ()
    {
        if($_POST)
        {
            $msg = ""; //.=  ต่อสตริง
            $err = "";
            if($_POST['payment']){
                $msg = "<b>วิธีชำระเงิน:</b>";
                $payment = $this->input->post('payment');
                if($payment == "credit")
                {
                    $msg .="บัตรเครดิต(". $this->input->post('credit').")<br>";
                }
                else if ($payment == "bank")
                {
                    $msg.="โอนเงินผ่านธนาคาร (".$this->input->post('bank').")<br>";

                }
            }
            else { $err .= "<li>ไม่ได้เลือกวิธีการชำระเงิน</li><br>";}
            if($_POST['delivery'])
            {
                $msg .= "<b>วิธีจัดส่ง:</b>". $this->input->post('delivery')."<br>";
            }
            else { $err .= "<li>ไม่ได้เลือกวิธีจัดส่ง</li><br>"; }

            //จะแสดงข้อมูลนี้ก็ต่อเมื่อ มีตัวเลือก checkbox อันไดอันหนึ่งถูกเลือก
            if($_POST['search'] || $_POST['social'] || $_POST['email'])
            {
                $msg .= "<b>รู้จักเราทาง: </b>";
                if($_POST['search']){
                    $msg .= "<li>{$this->input->post('search')}</li>";
                }
                if($_POST['social']){$msg .= "<li>{$this->input->post('social')}</li>";}
                if($_POST['email']){$msg .= "<li>{$this->input->post('email')}</li>";}
               
            }
            else { $err .= "<li>โปรดเลือกอย่างไดอย่างหนึ่ง Search Social และ Email</li><br>"; }
            if($err == ""){
                echo "<h4>ข้อมูลที่ท่านเลือกคือ:</h4>$msg";
            }
            else{
                echo '<div class="warning"><b>ข้อผิดพลาด</b>'.$err.'</div>';
                
            }
        }
    }
}