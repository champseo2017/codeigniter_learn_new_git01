<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Examform extends CI_Controller {
    function __construct(){
        parent::__construct(); //ต้องมีกำกับไว้ถ้าเรียกใช้งานฟังก์ชั่น construct
        $this->load->library('session');
    }
    public function index () {
        $sql = 'select * from examination';
        $query = $this->db->query($sql)->result_array();// ->result (คืนค่ามาเป็น object การเข้าถึงข้อมูล -> object) | ->result_array() คืนค่ามาเป็นรูปแบบ array การเข้าถึง $row['key']
        $data = array(
            'get_query' => $query
        );
        $this->load->view('header');     
        $this->load->view('exam',$data);
        $this->load->view('footer'); 
        return $query;
    }
    public function exam_check () {

        $sql = 'select * from examination';
        $query = $this->db->query($sql)->result_array();
        $sum = 0;
        $count = 0;
        $count_w = 0;
        $no = $row['first-name'];
        foreach($query as $row)
        {
            $no = $row['no_number'];
            $index = "q$no";
            $ans = $row['answer'];
            if(empty($_POST[$index]))
            {
                echo "ข้อที่ $no คุณไม่ได้ตอบ เฉลย คือ $ans <br>";
                $_POST[$index] = "";
                $count ++;

            }else{
                echo "ข้อที่ $no ตอบ $_POST[$index] เฉลย คือ $ans <br/>";
                $count ++;
            }
            if ($_POST[$index] != $ans)
            {
                $count_w ++; 
            }else{
                $sum ++; //คำตอบตรงกับเฉลยบวกเพิ่มคะแนนขึ้น 1
            }
        }
        echo "<hr/>";
        echo "<p>ตอบถูก $sum/$count ข้อ</p>";
        echo "<p>ตอบผิด $count_w ข้อ</p>";
        echo '<button onclick="history.go(-1);">Back </button>';
    }
}