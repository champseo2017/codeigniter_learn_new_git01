<?php
// ถ้าไม่มี session ที่กำหนดสถานะสมาชิก
if(!isset($user_id_ses) || $user_id_ses=="")
{
    // ไปที่หน้าล็อกอิน
    redirect('/user_account/user_login');
    exit;   
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Page User</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>    
</head>
 
<body>
 
    <?php
    $attributes = array('name' => 'form1');
    echo form_open('user_account/log_out',$attributes);
    ?>

    <div style="margin:auto;width:500px;">
    UserID : <?php echo $user_id_ses ?><br>
    Username : <?php echo $user_name_ses ?><br>
    <input type="submit" value="Logout" name="btn_loout">
    </div>
    
    <?php echo form_close(); ?>
 
    <script type="text/javascript">
    $(function(){
        
        // กำหนดให้สคริปเช็คสถานะการใช้งานอยู่ของสมาชิกและอัพเดทเวลา ให้ทำงานทุกๆ 5 วินาที
        setInterval(function(){
            var base_url = '<?= base_url();?>';
            $.post(base_url + "user_account/checkloginuser",function(data){
                if(data==0){ // ถ้าไม่ได้ใช้แล้วหรือล็อกเอาท์หรืออื่นๆ
                    // ให้ไปที่หน้าล็อกอิน
                    window.location= base_url + 'user_account/user_login';   
                }
            });
        },300000);  // 1000 เท่ากับ 1 วินาที // เท่ากับ 300 วินาทีเท่ากับ 5 นาที
    });
    </script>
</body>
</html>