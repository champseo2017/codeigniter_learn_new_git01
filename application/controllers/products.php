<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller {
    function __construct(){
            parent::__construct(); //ต้องมีกำกับไว้ถ้าเรียกใช้งานฟังก์ชั่น construct
            $this->load->library('session');
    }
    public function index()
    {
        echo "Welcome query result";
    }
    function getquery_result_array(){
        $sql = 'select * from products';
        $query = $this->db->query($sql)->result_array();// ->result (คืนค่ามาเป็น object การเข้าถึงข้อมูล -> object) | ->result_array() คืนค่ามาเป็นรูปแบบ array การเข้าถึง $row['key']
        echo '<table width="100%" border="1"><tr><td>รหัส</td><td>ชื่อหนังสือ</td><td>ราคา</td></tr>';
        foreach($query as $row)
        {
            echo '<tr><td>'.$row['code'].'</td><td>'.$row['name'].'</td><td>'.$row['price'].'</td></tr>';
        }
        echo '<button onclick="history.go(-1);">Back </button>';
    }
    function getquery_result(){
        $sql = 'select * from products';
        $query = $this->db->query($sql)->result();// ->result (คืนค่ามาเป็น object การเข้าถึงข้อมูล -> object) | ->result_array() คืนค่ามาเป็นรูปแบบ array การเข้าถึง $row['key']
        echo '<table width="100%" border="1"><tr><td>รหัส</td><td>ชื่อหนังสือ</td><td>ราคา</td></tr>';
        foreach($query as $row)
        {
            echo '<tr><td>'.$row->code.'</td><td>'.$row->name.'</td><td>'.$row->price.'</td></tr>';
        }
        echo '<button onclick="history.go(-1);">Back </button>';
    }
    function getquery_result_row_session(){
        $sql = 'select * from products';
        $query = $this->db->query($sql)->row('code');// ->row(10) กำหนดการ query recode
        $newdata = array(
            'code'  => $query,
        );
        $this->session->set_userdata($newdata);
        $get_session = $this->session->userdata('code');
        // $this->session->unset_userdata('code');
        echo $get_session.' code <br/>';
    }
    function getquery_result_row(){
        $sql = 'select * from products';
        $query = $this->db->query($sql);// ->row(10) กำหนดการ query recode
        $row = $query->row();
        echo '<table width="100%" border="1"><tr><td>รหัส</td><td>ชื่อหนังสือ</td><td>ราคา</td></tr>';
        if (isset($row))
        {
            echo '<tr><td>'.$row->code.'</td><td>'.$row->name.'</td><td>'.$row->price.'</td></tr>';
        }
        echo '<button onclick="history.go(-1);">Back </button>';
    }
    function insert_db(){
       $sql = 'insert into products(code, name, price) values ("0004","Social Network Application Development", 290.00)';
       if($this->db->query($sql)){
           echo "เพิ่มรายการเรียบร้อย<br>";
       }else{
           echo "ไม่สามารถเพื่มรายการได้<br>";
       }
       echo '<button onclick="history.go(-1);">Back </button>';
    }
    function update_db(){
        $sql = 'update products set code = "004" where id = 7';
        if($this->db->query($sql)){
            echo "ปรับปรุงรายการเรียบร้อย<br>";
        }else{
            echo "ไม่สามารถปรับปรุงรายการได้<br>";
        }
        echo '<button onclick="history.go(-1);">Back </button>';
     }
     function delete_db(){
         $sql = 'delete from products where code = "004"';
         if($this->db->query($sql))
         {
             echo "ลบรายการเรียบร้อย <br>";

         }else{
             echo "ไม่สามารถลบรายการได้ <br>";
         }
         echo '<button onclick="history.go(-1);">Back </button>';
     }
     function transv1 ()
     {
         $sql1 = 'insert into products (code, name, price) values ("005","Network development", 290.00)';
         $sql2 = 'update products set price = 450.00 where code = "005"';
         $this->db->trans_begin();
         $this->db->query($sql1);
         $this->db->query($sql2);
         $this->db->trans_complete();
         if($this->db->trans_status()) //Transaction เสร็จเรียบร้อย
         {
             echo "Transaction เสร็จเรียบร้อย <br>";
         }else{
             echo "Transaction เกิดข้อผิดพลาด <br>";
         }
         echo '<button onclick="history.go(-1);">Back </button>';
     }
     function trans_manual () {
         $sql1 = 'insert into products (code, name, price) values ("006", "development", 500.00)';
         $sql2 = 'update products set price = 900.00 where code = "006"';
         $this->db->trans_begin();
         $this->db->query($sql1);
         $this->db->query($sql2);
         if($this->db->trans_status())
         {
             $this->db->trans_commit();
             echo 'Transaction เสร็จเรียบร้อยแล้ว <br>';

         }else{
             $this->db->trans_rollback();
             echo "Transaction เกิดข้อผิดพลาด <br>";
         }
         echo '<button onclick="history.go(-1);">Back </button>';
     }
     function query_bindingv1 ()
     {
         $sql = 'insert into products(code, name, price) values (?,?,?)';
         $array_query = array('007', 'Enterprise PHP Devlopment', 250.00);
         if($this->db->query($sql,$array_query)){

            echo "insert succes";

         }else{
             echo "insert not succes";
         }
         echo '<button onclick="history.go(-1);">Back </button>';
     }
     function active_record_v1 ()
     {
         $query = $this->db->select('code, name, price')
                ->where('code', '005')
                ->get('products')
                ->result();
        foreach($query as $row){
            echo $row->code."<br>";
            echo $row->name."<br>";
            echo $row->price."<br>";
        }
        echo '<button onclick="history.go(-1);">Back </button>';
     }
     function active_record_get_limit ()
     {
         $query1 = $this->db->get('products') // select all
                    ->result(); 
         $query2 = $this->db->get('products', 5, 2) // select เรคจำนวนเรคคอน และ กำหนดเรคคอนเริ่มต้น
                    ->result();
        foreach($query2 as $row)
        {
            echo $row->code."<br>";
            echo $row->name."<br>";
            echo $row->price."<br>";

        }
         echo '<button onclick="history.go(-1);">Back </button>';
     }
     function active_record_get_where()
     {
         // ฟงก์ชั่น get_where() เป็นฟังก์ชั่นที่ใช้ค้นหาหรือเลือกข้อมูลเหมือนกับ select เหมือนกับ ฟังก์ชั่น get()
         // รูปแบบ $this->db->get_where($table,$where,$limit,$offset)
         // แต่สำหรับฟังก์ชั่น get_where() เป็นการต้นหาหรือเลือกข้อมูลแบบมีเงื่อนไข
         // $limit และ $offset หากไม่กำหนดจะเป็นการแสดงเรคอร์ดทั้งหมด

         $cause = array('code'=>'005', 'name'=>'Network development');
         $query = $this->db->get_where('products', $cause)->result();
         foreach ($query as $value) {
            echo $value->code."<br>";
            echo $value->name."<br>";
         }
         echo '<button onclick="history.go(-1);">Back </button>';
     }
     function position_function ()
     {
         //ใน php การเขียนฟังก์ชั่นสามารถเขียนเอาไว้ตำแหน่งใดก็ได้ภายในเพจนั้น อาจเขียนเอาไว้ก่อนหรือหลังส่วนที่จะเรียกใช้ฟังก์ชั่นก็ได้
         if($x <= 0){
            show_error("กรุณาใส่ค่าที่มากกว่า 0");
         }
         function show_error($msg)
         {
             echo '<p style="color:red;">'. $msg . '</p><br/>';
         }
     }
     function increment($input='')
     {
         //โดยปกติแล้วการส่งข้อมูลกลับจะต้องทำที่ส่วนท้ายสุดของฟังก์ชั่นหรือเป็นคำสั่งสุดท้ายของฟังก์ชั่น
         $input++;
         return $input;
         echo "End of function<br/>"; //คำสั่งนี้ไม่มีผล

     }
     function get_microtime ()
     {
         $mt = explode(" ", microtime());
         $time = $mt[0] + $mt[1];
         return $time;
        
     }
     function clu_microtime ()
     {
        $time_start = $this->get_microtime();
        $go_on = true;
        while ($go_on)
        {
            $rand = rand();
            if($rand == 9999)
            {
                $go_on = false;
            }
            
        }
        $time_end = $this->get_microtime();
        $difftime = $time_end - $time_start;
        $time = round($difftime, 4);
        echo "ใช้เวลาในการสุ่ม $time วินาที เพื่อให้ได้ 9999";

     }
     function pass_date ()
     {
        date_default_timezone_set('Asia/Bangkok');
        $datetime_compare = "2018/07/20 12:00";
        echo "วันเวลาปัจจุบัน :" .date('Y/m/d H:i') . "<br>";
        echo "วันเวลาที่โพสต์ :" .$datetime_compare ."&raquo";
        echo "<span>" .$this->datetime_ago($datetime_compare) ."</span>";
     }
     function datetime_ago($datetime_string)
     {
        date_default_timezone_set('Asia/Bangkok');
        $ts = strtotime($datetime_string);
        $now = strtotime('now');
        if( !$ts || $ts > $now ) { return false; }
        
        $diff = $now - $ts;

        $second = 1;
        $minute = 60 * $second;
        $hour = 60 * $minute;
        $day = 24 * $hour;
        $yesterday = 48 * $hour;
        $month = 30 * $day;
        $year = 365 * $day;
        $ago = "";

        if($diff >= $year)
        {
            $ago = round($diff/$year) . "ปี ที่แล้ว";

        }
        else if($diff >= $month)
        {
            $ago = round($diff/$month) . "เดือน ที่แล้ว";
        }
        else if($diff > $yesterday)
        {
            $ago = intval($diff/$day) . "วันที่แล้ว";
        }
        else if($diff <= $yesterday && $diff > $day)
        {
            $ago = " เมื่อวานนี้";
        }
        else if ($diff >= $hour)
        {
            $ago = intval($diff/$hour) . " ชั่วโมง ที่แล้ว";
        }
        else if($diff >= $minute)
        {
            $ago = intval($diff/$minute) . " นาที ที่แล้ว";
        }
        else if ($diff >= 5*$second)
        {
            $ago = intval($diff/$second) . " วินาที ที่แล้ว";
        }
        else {
            $ago = "เมื่อสักครู่";
        }
        return $ago;
        
     }
     function load_jquery_ajex ()
     {
         for($i=1; $i<=10; $i++)
         {
             echo $i."<br>";

         }
     }
     function method_ajax ()
     {
         for ($i=1; $i<=10; $i++)
         {
             echo $i."<br>";
         }
     }
     function method_post_ajax ()
     {
         $data_text_box1 = $_POST["myData"];
         $sum = floatval($data_text_box1[0]["text1"]) + floatval($data_text_box1[0]["text2"]);
         echo $sum;
        
     }
  
}