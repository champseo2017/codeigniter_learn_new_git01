<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class User_account extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('User_account_model', 'user');
    }

    public function index ()
    {
        $this->load->view('user_login');
    }

    public function user_login ()
    {
        $this->load->view('user_login');
    }

    public function page_user ()
    {
        $data_session = array(

            'user_id_ses' => $this->session->userdata('user_id_ses'),
            'user_name_ses' => $this->session->userdata('user_name_ses')
        ); 
        $this->load->view('page_user',$data_session);
    }

    public function check_login()
    {
        if(isset($_POST['btn_login'])){ // เมื่อกดปุ่มล็กอิน
            // ตรวจสอบการส่งค่าฟอร์ม ชื่อผู้ใช้และรหัสผ่าน
            if(isset($_POST['u_name']) && $_POST['u_name']!="" && isset($_POST['u_pass']) && $_POST['u_pass']!=""){
               $u_name = $_POST['u_name'];
               $u_pass = $_POST['u_pass'];
               $sql = $this->user->select_user($u_name,$u_pass);
               $num = $sql->num_rows();
               if($sql){
                if($num > 0){
                   $row = $sql->result_array();// ดึงข้อมูลจากฐานข้อมูล
                   $user_login_status_exist= $row[0]['user_login_status'];  // เก็บสถานะล็อกอิน
                   $user_datetime_using= $row[0]['user_datetime_using']; // เก็บเวลาที่ใช้อยู่ล่าสุด

                   // ถ้ามีผู้ใช้ค้างสถานะล็อกอินชื่อนี้อยู่
                   if($user_login_status_exist==1){
                       // ถ้าเวลาที่ใช้อยู่ บวกอีก 10 วินาที มากกว่าหรือเท่ากับเวลาในปัจจุบัน
                       if(strtotime(date("Y-m-d H:i:s",strtotime($user_datetime_using." +5 minute")))>=time()){
                        // กลับไปยังหน้าล็อกอิน ส่ง error กลับ       
                          $get = "?error=1";
                          redirect('/user_account/user_login'.$get);
                        exit;       
                    }else{ // ถ้าน้อยกว่า หรือไม่ได้ใช้งานแล้ว
                        // สร้างตัวแปร session
                        $user_id_ses = $this->session->set_userdata('user_id_ses', $row[0]['user_id']);
                        $user_name_ses = $this->session->set_userdata('user_name_ses', $row[0]['user_name']);
                        
                        // อัพเดทสถานะการล็อกอิน
                        $this->user->update_login_status($user_id_ses);
                        // ไปยังหน้าสมาชิก  
                        redirect('/user_account/page_user');
                        exit;                                                   
                        } 
                    }else{ // ถ้า ไม่มี  ผู้ใช้ล็อกอินชื่อนี้อยู่
                           // สร้างตัวแปร session
                           $user_id_nologin = $this->session->set_userdata('user_id_ses', $row[0]['user_id']);
                           $user_name_nologin = $this->session->set_userdata('user_name_ses', $row[0]['user_name']);
                           // อัพเดทวันที่ เวลา และสถานะการล็อกอิน
                           $this->user->no_users_logging($user_id_nologin);
                            // ไปยังหน้าสมาชิก  
                            redirect('/user_account/page_user');
                            exit;
                        }
                }else{ // เกิดข้อผิดพลาด ไม่พบข้อมูลผู้ใช้ในระบบ
                       // กลับไปยังหน้าล็อกอิน ส่ง error กลับ
                       $get = "?error=3";
                       redirect('/user_account/user_login'.$get);
                       exit; 
                }
            }else{ // เกิดข้อผิดพลาดการคิวรี่
                    // กลับไปยังหน้าล็อกอิน ส่ง error กลับ
                $get = "?error=3";
                redirect('/user_account/user_login'.$get);
                exit; 
            }
        }else{ // ไม่ได้กรอกข้อมูล
            // กลับไปยังหรอล็อกอิน ส่ง error กลับ
            $get = "?error=2";
            redirect('/user_account/user_login'.$get);
            exit; 
        }
    }else{
            // ไม่ได้กดปุ่มล็อกอิน
            // กลับไปยังหรอล็อกอิน ส่ง error กลับ
            $get = "?error=2";
            redirect('/user_account/user_login'.$get);
            exit; 
    } 


    }
   
    public function checkloginuser()
    {
        $session_checkloginuser = $this->session->userdata('user_id_ses');
        if(isset($session_checkloginuser) && $session_checkloginuser !="")
        {
            $this->user->check_m_loginuser($session_checkloginuser);
            
        }else{ // ถ้าไม่ได้ใช้แล้วหรือล็อกเอาท์หรืออื่นๆ ส่งค่ากลับเป็น 0
             echo 0;
        }
    }

    public function log_out ()
    {
        if(isset($_POST['btn_loout'])) // ถ้ากดปุ่มล็อกเอาท์
            {
                // อัเดทสถานะการล็อกอิน
                $user_logout = $this->session->userdata('user_id_ses');
                $this->user->log_out($user_logout);
                     
                // ล้างตัวแปร session   
                $this->session->unset_userdata('user_id_ses');
                $this->session->unset_userdata('user_name_ses');
                    // ไปที่หน้าล็อกอิน
                redirect('/user_account/user_login');
                exit;       
        }
    }



    
   
}

# การเข้าถึงข้อมูลในฟิลด์ตารางของ ดาต้าเบส ci
# เมธอด result() เป็นการเตรียมข้อมูลที่ได้จากฟังก์ชั่น query -> mysql
# เมธอด result() เป็นข้อมูลแบบวัตถุ (object) ซึ้งอยู่ในรูปของ array
# เมธอด result_array() ข้อมูลที่ได้จาก เมธอด จะเป็นข้อมูล array 
# เมธอด row() เป็นข้อมูลแบบวัตถุ (object) ซึ้งอยู่ในรูปของ array ( ถ้าอยากให้เมธอด row(10) ดึงข้อมูลออกมาหลายเรคอร์เราสามารถทำได้โดยระบุจำนวนเรคอร์ดเข้าไปในฟังก์ชั่น )
# เมธอด row_array() ข้อมูลที่ได้จะเป็น array แต่จะมีเพียงแค่เรคอร์ดเดียว ( ถ้าอยากให้เมธอด row_array(10) ดึงข้อมูลออกมาหลายเรคอร์เราสามารถทำได้โดยระบุจำนวนเรคอร์ดเข้าไปในฟังก์ชั่น )
# หาจำนวนแถวที่แสดงทั้งหมด num_rows()

