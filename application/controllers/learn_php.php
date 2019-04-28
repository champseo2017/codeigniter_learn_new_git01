<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Learn_php extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index ()
    {
        $a = 1234; // decimal number
        $b = "champ"; //string
        $c = 1234.456; //float
        $d[0] = "Win";
        $d[1] = "ThaiCreate.com";
        $e = true; //boolean
        define("constant", "Hello world"); // define("constnt","value");
        $integer = 1234; //ประกาศตัวแปรเป็นตัวเลขจำนวนเต็ม
        $true = true;
        $false = false;
        $null = null;
        $float = 1.1;
        $array[0] = "somchai";
        $array[1] = "weerachai";
        $array[2] = "surachai";
        $array[3] = "adisorn";
        print_r($array);
    }
}