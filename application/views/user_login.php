<?php
session_start();
$msg_login_error=array(
    "1"=>"เกิดข้อผิดพลาด ชื่อล็อกอินนี้ กำลังใช้งานอยู่ โปรดรออีก 5 นาที! ",
    "2"=>"เกิดข้อผิดพลาด โปรดกรอกชื่อผู้ใช้และรหัสผ่าน! ",
    "3"=>"เกิดข้อผิดพลาด ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง! ",    
);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>

    <?php
    $attributes = array('class' => 'email', 'id' => 'myform', 'name' => 'form1');
    echo form_open('user_account/check_login', $attributes);
    ?>

    <div style="margin:auto;width:500px;">
    Username: <input type="text" name="u_name" autocomplete="off">    <br>
    Password: <input type="password" name="u_pass"  autocomplete="off">
    <br>
    <input type="submit" value="Login" name="btn_login">
    <br>
    <?php if(isset($_GET['error'])){?>
    <?php echo $msg_login_error[$_GET['error']]?>
    <?php } ?>
    </div>
    
    <?php echo form_close(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>