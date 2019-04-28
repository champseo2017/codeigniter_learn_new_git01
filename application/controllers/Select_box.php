<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Select_box extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index ()
    {
        echo "<form action='select_box/get_select' method='post'>";
        echo "<select name='flower'>";
        echo "<option value='Rose' selected>กุหลาบ</option>";
        echo "<option value='Orchid'>กล้วยไม้</option>";
        echo "<option value='Carnation'>คาร์เนชั่น</option>";
        echo "</select>";
        echo "<input type='submit' value='Submit'>";
        echo "</form>";
    }
    public function get_select()
    {
        if($_POST['flower'])
        {
            $f = $this->input->post('flower');
            echo $f;
        }
    }

}