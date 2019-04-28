<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User online</title>
</head>
<body>

<?php foreach($user_online as $key => $user_onlines) { ?>
<span>useronline คนที่ : <?php echo $key + 1 ?> วันที่ / เวลา online : <?php echo date('m/d/Y H:i:s', $user_onlines['time']); ?></span><br>
<?php } ?>
<?php 
$count_user_online = count($user_online);
echo "<span>จำนวน User ที่ Online = </span><span> $count_user_online : คน</span>";
?>
</body>
</html>