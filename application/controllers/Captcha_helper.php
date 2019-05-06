<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
class Captcha_helper extends CI_Controller {

    function __construct(){

        parent::__construct(); 
    }

    public function index ()
    {

        
        $vals = array(
            'word' => 'Random word',
            'img_path' => './captcha/',
            'img_url' => base_url().'captcha/', 
            'img_width' => '150',
            'img_height' => 30,
            'expiration' => 7200
            );
        
        $cap = create_captcha($vals);
        echo 'Submit the word you see below:';
        echo $cap['image'];
        echo '<input type="text" name="captcha" value="" />';
    }

}