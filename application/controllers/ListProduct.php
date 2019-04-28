<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ListProduct extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Product_model_v2', 'product_v2');
    }

    public function index(){
        // count quantity from basket
       
        $this->load->view('showproduct');   
        
    }

    public function list_porduct(){
        $sql = $this->product_v2->select_product();
        echo "<table border='1'><tr align='center'>
        <td><b>ชื่อสินค้า</b></td>
        <td><b>ราคา</b></td>
        <td><b>คลิกเลือกซื้อสินค้า</b></td></tr>";
        // วนลูปดึงข้อมูลจากตาราง product
        foreach($sql as $row){
            
            $productID = $row["id"]; // เก็บรหัสสินค้าไว้ในตัวแปร $productID
            $productName = $row["name"]; // เก็บสินค้าไว้ในตัวแปร $productName
            $productPrice = $row["price"]; // เก็บราคาสินค้าไว้ในตัวแปร $productPrice

            // คลิกลิงค์ Add to Cart เพื่อเก็บสินค้าลงตะกร้า โดยเรียกฟังก์ชั่น DisplayBasket
            echo "<tr>".
                "<td><center>$productName</center></td>".
                "<td><center>$productPrice</center></td>".
                "<td><center>". 
                "<a href='#' onclick='DisplayBasket($productID, orders)'>".
                "Add to Cart</center></a></td></tr>";
        }
        echo "<table>";

    }

    public function addBasket()
    {
        $sessionID = $this->session->session_id;
        $addProductID = $this->input->get('productID');
        $sql = $this->product_v2->select_basket($sessionID, $addProductID);

        
        if($sql == 0){

            $this->product_v2->insert_basket($sessionID, $addProductID);

        }else{
            $this->product_v2->update_basket($sessionID, $addProductID);
        }
        $select_qu = $this->product_v2->left_join_product($sessionID);
        $totalPrice = 0;
        echo "<b>ตะกร้าสินค้า</b><p>";
        echo "<table border=1>";
        echo "<tr>
                <td>ชื่อสินค้า</td>
                <td>ราคา (บาท)</td>
                <td>จำนวน (รายการ)</td>
                <td>ราคารวม (บาท)</td>
                <td>คลิก Remove สินค้าออกจากตะกร้า</td>
            </tr>";
            // วนลูปเพื่อดึงรายการสินค้าจากตะกร้า
            foreach($select_qu as $row){


                $addProductID = $row["productID"]; // เก็บรหัาสินค้าไว้ในตัวแปร
                                                    // $addproductID
                $productName = $row["name"];        // เก็บชื่อสินค้าไว้ในตัวแปร
                                                    // $productName 
                $productPrice = $row["price"]; // เก็บราคาสินค้าไว้ในตัวแปร
                                                // $productPrice
                $quantity = $row["quantity"]; // เก็บจำนวนสินค้าไว้ในตัวแปร
                                            // $quantity 
                echo "<tr>";
                echo "<td>$productName</td>";
                echo "<td>$productPrice</td>";
                echo "<td>$quantity</td>";

                // คำนวณราคาสินค้ารวม = ราคา * จำนวนสินค้า
                echo "<td>".($productPrice * $quantity)."</td>";
                // คลิกลิงก์ Remove เพื่อเอาสินค้าออกจากตะกร้า โดยเรียกฟังก์ชัน removeBasket

                echo "<td><a href='#'". 
                    "onClick='removeBasket($addProductID, orders)'>".
                    "Remove </a></td></tr>";
                // คำนวนณราคาสุทธิ = ราคาสุทธิ + (ราคาสินค้า * จำนวนสินค้า)
                $totalPrice = $totalPrice + ($productPrice * $quantity);
            }
            // แสดงราคาสินค้าสุทธิ
            echo "<tr><td  colspan=4 align='right'>". 
                "<b>ราคาสุทธิ $totalPrice บาท</b></td></tr>";
            echo "</table>";
    }
}