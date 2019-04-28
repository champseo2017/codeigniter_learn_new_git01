<?php if(! defined ('BASEPATH')) exit('No direct script access allowed');
class Auth_model extends CI_Model {

    private $table = "user";
    private $_data = array();

    public function validate()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        // $this->db->select("COUNT(*) AS username");
        // $this->db->where("username", $username);
        // $query = $this->db->get($this->table);

        $this->db->where("username", $username, "password",$password);
        $query = $this->db->get($this->table);
        // $result = mysqli_query($conn,"SELECT COUNT(*) FROM prod_catalogue WHERE cat_id ='".$catid."' " ) or die(mysqli_error($this->dblink));
        // สมมติถ้าต้องการนับจำนวนแถวทั้งหมด ถ้าใช้ mysql_num_rows ( ) แสดงว่าจะต้อง select ข้อมูลทั้งหมดมาก่อน เพื่อมาเข้า function mysql_num_rows ( ) แล้วจะได้ผลลัพธ์คือจำนวนแถวทั้งหมด
        // แล้วสมมติว่ามี เป็นหมื่น record นั่นแสดงว่าต้อง select มาทั้งหมื่น record ซึ่งจะช้า ถ้าใช้ select count (*)
        // แสดงว่าจะให้ฐานข้อมูล query มาเลยว่า จำนวนแถวทั้งหมด มีเท่าไร ซึ่งจะเร็วกว่ามากครับ 

        if ($query->num_rows())
        {
            $row = $query->row_array();
            if(md5($password) == $row['password']){
                // we not need password to store in session
                unset($row['password']);
                $this->_data = $row;
                return ERR_NONE;
            }
            //password not match
            return ERR_INVALTD_PASSWORD;
            
        }else { 
            // found row by username
            return ERR_INVALTD_USERNAME;
        }
    }
    public function get_data()
    {
        return $this->_data;
    }


}