<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class Date_number_02 extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index(){

       /* 
       
        ฟังก์ชั่นเพิ่มเติมอื่นๆ
        ฟังก์ชั่นที่น่าสนใจเพิ่มเติมอื่นๆ มีดังนี้
        ฟังก์ชั่น pi() ใช้สำหรับค่า pi เช่น

       */

       $circle_area = pi() * pow(10, 2);
       echo $circle_area;

    }
}