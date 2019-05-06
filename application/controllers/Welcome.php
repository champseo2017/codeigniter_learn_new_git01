<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		echo '<a href="/Products/getquery_result_array">Query result array</a><br/>';
		echo '<a href="/Products/getquery_result">Query result</a><br/>';
		echo '<a href="/Products/getquery_result_row_session">Query result row session</a><br/>';
		echo '<a href="/Products/getquery_result_row">Query result row</a><br/>';
		echo '<a href="/Examform/">Take the test.</a><br/>';
		echo '<a href="/Products/insert_db">insert db v1 .</a><br/>';
		echo '<a href="/Products/update_db">update db v1 .</a><br/>';
		echo '<a href="/Products/delete_db">delete db v1 .</a><br/>';
		echo '<a href="/Products/transv1">Transaction v1 .</a><br/>';
		echo '<a href="/Products/trans_manual">trans_manual v2 .</a><br/>';
		echo '<a href="/Products/query_bindingv1">query_bindingv1 v1 .</a><br/>';
		echo '<a href="/Products/active_record_v1">active_record_v1 .</a><br/>';
		echo '<a href="/Products/active_record_get_limit">active_record_get .</a><br/>';
		echo '<a href="/Products/active_record_get_where">active_record_get_where .</a><br/>';
		echo '<a href="/Products/position_function">position_function .</a><br/>';
		echo '<a href="/Products/increment/1">increment .</a><br/>';
		echo '<a href="/Products/clu_microtime">clu_microtime .</a><br/>';
		echo '<a href="/Products/pass_date">pass_date .</a><br/>';
		echo '<a href="/Products/script_in_controller">script_in_controller .</a><br/>';
		echo '<a href="/book">Update_Delete_book</a><br/>';
		echo '<a href="/Learn_javascript_con">Learn javascript</a><br/>';
		echo '<a href="/select/select_data">การค้นหาหรือเลือกข้อมูล select</a><br/>';
		echo '<a href="/select/select_get_where">ฟงก์ชั่น get_where()</a><br/>';
		echo '<a href="/select/select_or_like">ฟงก์ชั่น get_where() or LIKE</a><br/>';
		echo '<a href="/select/select_field">ฟงก์ชั่น select_field()</a><br/>';
		echo '<a href="/select/selectsum">ฟงก์ชั่น select_field_sum()</a><br/>';
		echo '<a href="/select/selectmin">ฟงก์ชั่น select_min()</a><br/>';
		echo '<a href="/select/selectmax">ฟงก์ชั่น select_max()</a><br/>';
		echo '<a href="/select/select_avg_output">ฟงก์ชั่น select_avg()</a><br/>';
		echo '<a href="/select/select_sum_output">ฟงก์ชั่น select_sum2()</a><br/>';
		echo '<a href="/select/select_where_output">ฟงก์ชั่น select_where()</a><br/>';
		echo '<a href="/serverhttpuri">คืนค่า URi คืนค่าพาธ URL ทั้งหมด</a><br/>';
		echo '<a href="/getimage">getsizeimage get_image</a><br/>';
		echo '<a href="/session_user">session user</a><br/>';
		echo '<a href="/where_in_not_in">where_in or where in where not in</a><br/>';
		echo '<a href="/mysql_like">My sql like</a><br/>';
		echo '<a href="/or_like_not_like">Or like not like</a><br/>';
		echo '<a href="/group_by">Group by</a><br/>';
		echo '<a href="/form_v1">Form v1</a><br/>';
		echo '<a href="/Radio_v1">Radio v1</a><br/>';
		echo '<a href="/form_check_box">Check box v1</a><br/>';
		echo '<a href="/select_box">Select box</a><br/>';
		echo '<a href="/form_check_boxv1">Form check box v1</a><br/>';
		echo '<a href="/html_form">Html form</a><br/>';
		echo '<a href="/form_array_v2">Form get array</a><br/>';
		echo '<a href="/form_array_v3/registerForm">Form get array v3</a><br/>';
		echo '<a href="/facebook_login_test">test facebook login</a><br/>';
		echo '<a href="/strlen_input">Strlen_input</a><br/>';
		echo '<a href="/trim_input">Trim_input</a><br/>';
		echo '<a href="/getmac/get_php">get_php</a><br/>';
		echo '<a href="/function_pass1">Function_pass1</a><br/>';
		echo '<a href="/user_account">User_account</a><br/>';
		echo '<a href="/numeric_type">check numeric_type</a><br/>';
		echo '<a href="/checkdate">Check_date</a><br/>';
		echo '<a href="/checkdate/timestamp_little">timestamp_little</a><br/>';
		echo '<a href="/php_filter">php_filter</a><br/>';
		echo '<a href="/Regular_ex01">Regular</a><br/>';
		echo '<a href="/Regular_ex01/pregsplit">Pregsplit</a><br/>';
		echo '<a href="/Regular_ex01/form_ex_01">form_ex_01</a><br/>';
		echo '<a href="/regex_01">Regex_01</a><br/>';
		echo '<a href="/regex_01/RegEx_02">Regex_02</a><br/>';
		echo '<a href="/Date_ex_01">Date_ex_01</a><br/>';
		echo '<a href="/Date_ex_01/Increase_decrease_date">Increase_decrease_date</a><br/>';
		echo '<a href="/System_checks">System_checks</a><br/>';
		echo '<a href="/get_image_byday">Get_image_byday</a><br/>';
		echo '<a href="/Limit_character">Limit_character</a><br/>';
		echo '<a href="/Thai_date/show_date">Thai_date</a><br/>';
		echo '<a href="/Webboard">Webboard</a><br/>';
		echo '<a href="/Html_helper">Html_helper</a><br/>';
		echo '<a href="/Simple_calendar">Simple_calendar</a><br/>';
		echo '<a href="/Calender">Calender</a><br/>';
		echo '<a href="/If_01">If_01</a><br/>';
		echo '<a href="If_01/if_02">if_02</a><br/>';
		echo '<a href="If_01/if_03">if_03</a><br/>';
		echo '<a href="ListProduct">Ajax product</a><br/>';
		echo '<a href="Date_number_02">Date_number_02</a><br/>';
		echo '<a href="Captcha_helper">Captcha helper</a><br/>';

	}
}
