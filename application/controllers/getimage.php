<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Getimage extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Getimage_size_models', 'imagesize');
    }
    public function index ()
    {
        //ถ้าเรารู้ลำดับของ value ที่ return ออกมาจาก array เราสามารถเก็บแบบ list() ได้ 
        list($width, $height, $type, $attr) = getimagesize("assets/images/3-girls.jpg");
	    echo "<img src='assets/images/3-girls.jpg'><br>";
	    echo "Image width " .$width;
	    echo "<BR>";
	    echo "Image height " .$height;
	    echo "<BR>";
	    echo "Image type " .$type;
	    echo "<BR>";
	    echo "Attribute " .$attr;
    }
}