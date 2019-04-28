<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php 

if(validation_errors()){ // ถ้ามีเงื่อนไขหนึ่งใดไม่ผ่าน ให้แสดง ข้อความ error ตำแหน่งนี้
    echo   validation_errors();
    echo "<br>";
}


?>
    <?php echo form_open('form_array_v3/get_post'); ?>
    <input type="text" name="username" placeholder="username" />
    <?php echo form_error() ?>
    <div><input type="submit" value="Submit" /></div>
    <?php echo form_close(); ?>
</body>
</html>