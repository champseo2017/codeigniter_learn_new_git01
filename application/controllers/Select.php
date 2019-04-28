<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Select extends CI_Controller {
    function __construct(){
        parent::__construct(); //ต้องมีกำกับไว้ถ้าเรียกใช้งานฟังก์ชั่น construct
        $this->load->model('Select_data', 'select');
    }
    public function select_data ()
    {
        $select_db = $this->select->selectdata();
        foreach($select_db as $db_select)
        {
            echo "<pre>";
            print_r($db_select);
            echo "</pre>";
        }
    }
    public function select_get_where ()
    {
        $select_db = $this->select->select_where();
        echo "<pre>";
        print_r($select_db);
        echo "</pre>";
    }
    public function select_or_like ()
    {
        $select_db = $this->select->or_like();
        if($select_db)
        {
            echo "เท่ากับ cat_id = 1";
            echo "<pre>";
            print_r($select_db);
            echo "</pre>";
        }
        else
        {
            echo "ไม่เท่ากับ cat_id = 1<br/>";
        }

    }
    public function select_field ()
    {
        $select_db = $this->select->select_field();
        echo "<pre>";
        print_r($select_db);
        echo "</pre>";
    }
    public function selectsum ()
    {
        $select_db = $this->select->select_sum();
        echo "ราคา * กับจำนวนสินค้า = ".$select_db[0]['s_Total']."<br>";
        echo "<pre>";
        print_r($select_db);
        echo "</pre>";
    }
    public function selectmin ()
    {
        $select_db = $this->select->select_min();
        echo "select_min() ค่าที่ต่ำที่สุดใน field price = ".$select_db[0]['MinPrice']." บาท";
    }

    public function selectmax ()
    {
        $select_db = $this->select->select_max();
        echo "select_max() ค่าที่มีค่าสูงที่สุดใน field price = ".$select_db[0]['MaxPrice']." บาท";
    }
    public function select_avg_output()
    {
        $select_db = $this->select->select_avg();
        echo "ค่าเฉีลยของ field price avg = ". $select_db[0]['AVGprice']. " บาท";
    }
    public function select_sum_output()
    {
        $select_db = $this->select->select_sum2();
        echo "Select sum all field price = ".$select_db[0]['SUMprice']. " บาท";
    }
    public function select_where_output ()
    {
        $select_db = $this->select->select_where_2();
        echo "<pre>";
        print_r($select_db);
        echo "</pre>";
    }
}