<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Webboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('user_agent');
        $this->load->model('Webboard_models', 'webboard');

    }

    public function index()
    {
        echo "<h2> Web Board </h2><br>";
        echo form_open('Webboard/insert_question',array('name'=>'form1'));
        echo "หัวข้อกระทู้ : ";
        echo "<input type='text' name='topic'><p>";
        echo "รายละเอียด : ";
        echo "<textarea name='detail' cols='75' rows='10'></textarea><p>";
        echo "ชื่อผู้ตั้งกระทู้ : ";
        echo "<input type='text' name='name'><p>";
        echo "<input type='submit' name='Submit' value='ส่งกระทู้'>";
        echo "<input type='reset' name='Submit2' value='ยกเลิก'>";
        echo form_close();

    }

    public function insert_question()
    {
        $input = $this->input->post(array('topic', 'detail' ,'name'), true);

        if(strlen(trim($input['topic'])) == 0)
        {
            echo "โปรดกรอกข้อมูล";
        }elseif(strlen(trim($input['detail'])) == 0){
            echo "โปรดกรอกข้อมูล";
        }elseif(strlen(trim($input['name'])) == 0){
            echo "โปรดกรอกข้อมูล";
        }else{

            $topic = stripslashes($input['topic']); 
            $topic = htmlspecialchars($input['topic'], ENT_QUOTES); 
            $topic = strip_tags($input['topic']);
          
            $detail = stripslashes($input['detail']); 
            $detail = htmlspecialchars($input['detail'], ENT_QUOTES); 
            $detail = strip_tags($input['detail']);
    
            $name = stripslashes($input['name']); 
            $name = htmlspecialchars($input['name'], ENT_QUOTES); 
            $name = strip_tags($input['name']);
            
            
            $insert = $this->webboard->insert_question($topic, $detail, $name);
            
            if($insert)
            {
                echo "เพิ่มกระทู้ใหม่ลงสู่ฐานข้อมูลเรียบร้อย<p>";
            }else{
                echo "ไม่สามารถเพิ่มกระทู้ใหม่ลงในฐานข้อมูลได้<p>";
            }

        }

        $back = $this->agent->referrer();
        $url = base_url()."Webboard/show_question";
        echo "<a href='$url'>แสดงกระทู้ทั้งหมด</a><br>";
        echo "<a href='$back'>กลับสู่หน้าฟอร์มตั้งกระทู้</a><br>";

    }

    public function show_question ()
    {
        $query = $this->webboard->show_question_all();
        $count_qtopic = count($query);
        if($count_qtopic == 0)
        {
            echo "<p>ไม่มีกระทู้ในระบบ</p>";
        }else{
            echo "<h2>กระทู้ทั้งหมด</h2>";
            foreach($query as $key => $querys)
            {
                $get_qno = $querys['qno'];
                $qtopic = $querys['qtopic'];
                $qname = $querys['qname'];
                $qcount = $querys['qcount'];
    
                $url = base_url()."Webboard/show_detail?item=$get_qno";
                $url_form_qu = base_url()."Webboard";
              
                echo "หมายเลขกระทู้ &nbsp; $get_qno &nbsp;<span style='color:black'>คำถาม</span>&nbsp;<a href='$url'>";
                echo "&nbsp;$qtopic</a> &nbsp;";
                echo "ชื่อผู้ตั้งกระทู้ $qname&nbsp;";
                echo "จำนวนผู้ตอบกระทู้&nbsp;[".$qcount."]<br>\n";
                echo "<hr>";
                
            }
            echo "<a href='$url_form_qu'>ตั้งกระทู้ใหม่</a>";
        }
       
    }

    public function show_detail()
    {
        $item = $this->input->get('item', true);
        $query = $this->webboard->select_question_qno($item);
        echo 'คำถาม <b>';
        echo $query[0]['qtopic'];
        echo '</b><br>';
        echo '<table width="100%" border="1" bgcolor="#E0E0E0" bordercolor="black">';
        echo '<tr><td>';
        echo $query[0]['qdetail'];
        echo '<br>';
        echo '<span>โดย</span><b>';
        echo $query[0]['qname'];
        echo '</td></tr>';
        echo '</table><br>';
        $query_answer = $this->webboard->select_answerw_item($item);
        if($query_answer)
        {
            foreach($query_answer as $key => $query_answers)
            {
                echo 'คำตอบที่ <b>';
                echo $key + 1;
                echo '</b><br>';
                echo '<table width="100%" border="1">';
                echo '<tr><td>';
                echo $query_answers['adetail'];
                echo '<br>';
                echo 'โดย <b>';
                echo $query_answers['aname'];
                echo '</b>';
                echo '</td></tr>';
                echo '</table><br>';
            }
        }

        $url = base_url()."Webboard/add_answer?answerno=$item";
        $url_question = base_url()."Webboard/show_question";
        echo form_open($url);
        echo 'คำตอบ : <br>';
        echo '<textarea cols="40" rows="5" name="a_answer"></textarea><br>';
        echo 'ชื่อ : <input type="text" name="a_name" size="30"><br><br>';
        echo '<input type="submit" value="ส่งคำตอบ">&nbsp';
        echo '<input type="reset" value="ยกเลิก">';
        echo form_close();
        echo "<a href='$url_question'> กลับสู่หน้ารวมกระทู้</a>";
    }

    public function add_answer ()
    {
        $answerno = $this->input->get('answerno', true);
        $a_answer = $this->input->post('a_answer', true);
        $a_name = $this->input->post('a_name', true);

        $answerno = stripslashes($answerno); 
        $answerno = htmlspecialchars($answerno, ENT_QUOTES); 
        $answerno = strip_tags($answerno);

        $a_answer = stripslashes($a_answer); 
        $a_answer = htmlspecialchars($a_answer, ENT_QUOTES); 
        $a_answer = strip_tags($a_answer);

        $a_name = stripslashes($a_name); 
        $a_name = htmlspecialchars($a_name, ENT_QUOTES); 
        $a_name = strip_tags($a_name);

        $insert = $this->webboard->insert_answer($answerno,$a_answer, $a_name);
        $qcount = $this->webboard->select_qcount($answerno);
        $url = base_url()."Webboard/show_detail?item=$answerno";
        $url_home = base_url()."Webboard/show_question";

        if($insert)
        {
            $this->webboard->update_question($qcount, $answerno);
            echo "คำตอบถูกบันทึกลงฐานข้อมูลแล้ว <br><br>";
            echo "<a href='$url'> กลับไปยังกระทู้ </a><br>";
            echo "<a href='$url_home'> หน้าหลักของเว็บบอร์ด</a>";
            
        }
        else
        {
            echo "ไม่สามารถบันทึกคำตอบลงสู่ฐานข้อมูลได้ กรุณาตรวจสอบ";
        }
    }
}