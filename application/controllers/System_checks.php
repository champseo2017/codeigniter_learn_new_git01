<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class System_checks extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $useragent = $this->user_agent();
        $ip = $this->user_ip();
        $browser = $this->user_browser();
        $os = $this->user_os();
        echo "ท่านใช้เบราเซอร์ $browser <br> บนระบบปฏิบัติการ $os";
        echo "<hr>";
        echo "<b>User Agent:</b><br>$useragent<br>";
        echo "<hr>";
        echo "<b>Ip: </b> $ip";
    }

    public function user_agent ()
    {
        return $_SERVER['HTTP_USER_AGENT'];
    }

    public function user_ip ()
    {
        return $_SERVER['REMOTE_ADDR'];
    }

    public function user_browser ()
    {
        // ข้อมูลต่อไปนี้อาจมีการเปลียนแปลงตามเวอร์ชั่นของเบราเซอร์ ห้ามสลับลำดับในอาร์เรย์
        $a = array (
            "IE" => '/(MSIE)|(Trident)/i', // เก็บ array ของ browser
            "Opera" => '/(Opera)|(OPR)/i',
            "Firefox" => '/Firefox/i',
            "Chrome" => '/Chrome/i',
            "Safari" => '/Safari/i',
            "Edge" => '/edge/i',
            "Netscape" => '/netscape/i',
            "Maxthon" => '/maxthon/i',
            "Konqueror" => '/konqueror/i',
            "Handheld Browser" => '/mobile/i'
        );

        $user_agent = $this->user_agent();

        $browser = "Unknown";

        foreach ($a as $b => $p)
        {
            if(preg_match($p, $user_agent))
            {
                $browser = $b;
                break;
            }
        }

        return $browser;
    }

    public function user_os ()
    {
        // ข้อมูลเหล่านี้มีการเปลียนแปลงไปตามเวอร์ชั่นของ os ดังนั้น ขอให้ตรวจสอบเพิ่มเติมเมื่อมี os เวอร์ชั่นใหม่
        $a = array (

            'Windows 10' => '/windows nt 10/i',
            'Windows 8.1' => '/windows nt 6.3/i',
            'Windows 8' => '/windows nt 6.2/i',
            'Windows 7' => '/windows nt 6.1/i',
            'Windows Vista' => '/windows nt 6.0/i',
            'Windows Server 2003/XP x64' => '/windows nt 5.2/i',
            'Windows XP' => '/windows nt 5.1/i',
            'Windows XP' => '/windows xp/i',
            'Windows 2000' => '/windows nt 5.0/i',
            'Windows ME' => '/windows me/i',
            'Windows 98' => '/win98/i',
            'Windows 95' => '/win95/i',
            'Windows 3.11' => '/win16/i',
            'Mac OS X' => '/macintosh|mac os x/i',
            'Mac OS 9' => '/mac_powerpc/i',
            'Linux' => '/linux/i',
            'Ubuntu' => '/ubuntu/i',
            'iPhone' => '/iphone/i',
            'iPod' => '/ipod/i',
            'iPad' => '/ipad/i',
            'Android' => '/android/i',
            'BlackBerry' => '/blackberry/i',
            'Mobile' => '/webos/i'
        );

        $user_agent = $this->user_agent();

        $os = "Unknown";

        foreach ($a as $o => $p)
        {
            if(preg_match($p, $user_agent))
            {
                $os = $o;
                break;
            }
        }
        return $os;
    }
}