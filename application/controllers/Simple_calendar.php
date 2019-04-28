<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Simple_calendar extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index ()
    {
        $day_now = array("Sun" => "1", "Mon" => "2", "Tue" => "3", "Wed" => "4", "Thu" => "5", "Fri" => "6", "Sat" => "7");
        $first_day = date("D",mktime(0, 0, 1, intval(date("m")),1,date("Y")));
        $start_td = $day_now[$first_day]-1;
        $num_day = date("t");
        $num_day2 = ( $num_day + $start_td );
        $num_day3 = ( 7*ceil($num_day2/7) );

        $data = array(

            'day_now' => $day_now,
            'first_day' => $first_day,
            'start_td' => $start_td,
            'num_day' => $num_day,
            'num_day2' => $num_day2,
            'num_day3' => $num_day3
        );
        
        
        $this->load->view('simple_calendar_view', $data);
    }
}