<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Get_image_byday extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
       
    }
    public function index()
    {
       // ให้เขียนโปรแกรมเพื่อดึงรูปภาพมาแสดง โดยเปลียนรูปภาพวันดังกล่าวตามวันในสัปดาห์
       $today = date(l); // ฟังก์ชั่น date(l) เป็นฟังก์ชั่นในการดึงวันในสัปดาห์เป็นภาษาอังกฤษออกมา
       if($today == Monday)
       {
           echo "Today is Monday";

       }elseif($today == Tuesday)
       {
           echo "Today is Tuesday";

       }elseif($today == Wednesday)
       {
           echo "Today is Wednesday";

       }elseif($today == Thursday)
       {
            echo "Today is Thursday";

       }elseif($today == Friday)
       {
            echo "Today is Friday";

       }elseif($today == Saturday)
       {
            echo "Today is Saturday";

       }elseif($today == Sunday)
       {
            echo "Today is Sunday";
       }
       echo "<BR>";
       $url = base_url()."image_by_day/";
       echo "<img src='$url".$today.".gif'>"; 
    }
   
}