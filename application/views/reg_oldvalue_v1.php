<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reg oldvalue</title>
</head>
<body>
    <?php echo form_open('form_array_v3/save', array('role'=>'form'))."<br>" ?>

        <span>ชื่อ</span>
            <input type="text" name="name" value="<?php echo set_value('name'); ?>" size="50" /><br>
    <?php echo form_error('name')."<br>"; ?>

    <span>Age</span>
        <input type="text" name="age" value="<?php echo set_value('age'); ?>" size="50" /><br>
    <?php echo form_error('age')."<br>"; ?>

    <span>Payment</span>
            <input type="checkbox" name="checkbox1" value="Checkbox01" <?php echo set_checkbox('checkbox1', 'Checkbox01'); ?> /> checkbox1
            <input type="checkbox" name="checkbox2" value="Checkbox02" <?php echo set_checkbox('checkbox2', 'Checkbox02'); ?> /> checkbox2
            <input type="checkbox" name="checkbox3" value="Checkbox03" <?php echo set_checkbox('checkbox3', 'Checkbox03'); ?> /> checkbox3
    <?php echo form_error('checkbox1')."<br>"; ?>
    <?php echo form_error('checkbox2')."<br>"; ?>
    <?php echo form_error('checkbox3')."<br>"; ?>

    <!-- 
    การใส่ข้อมูลสำหรับอิลิเมนต์ radio 
    เนื่อง radio รายการที่อยู๋ในกลุ่มเดียวกันจะเลือกได้เพียงรายการเดียวเท่านั้นดังนั้นเราต้องอ่านค่าของรายการที่ถูกเลือกเก็บไว้ก่อนเพื่อจะนำ
    มาเปรียบเทียบว่าผู้ใช้เลือกรายการได โดยนำไปเปรียบเทียบกับค่าแอตทริบิวต์ value ของรายการนั้นถ้าตรงกันก็ให้เติมคำว่า checked ลงไป
    set_radio('name',value, true or false) true checked
     -->
     <span>Radio</span>
            <input type="radio" name="myradio" value="1" <?php echo  set_radio('myradio', '1'); ?> />
            <input type="radio" name="myradio" value="2" <?php echo  set_radio('myradio', '2'); ?> />
    <?php echo form_error('myradio')."<br>"; ?>

    <!-- select -->
    <?php 
    $option = array(
        "" => "Choose gender",
        "male" => "Male",
        "female" => "Female"
    );
    ?>
    <?php echo form_dropdown('gender' ,$option ,set_value('gender'),array("class"=>"form-control input-lg", "id" => "gender")); ?><br>
    <?php echo form_error('gender')."<br>"; ?>
    <!-- select -->

    <!-- select multiple -->
    <?php 
    $option_multiple = array(
        "" => "Choose gender",
        "male" => "Male",
        "female" => "Female"
    );
   
    ?>
    <?php echo form_dropdown('groups[]' ,$option_multiple ,set_value('groups[]'),array("class"=>"form-control input-lg", "id" => "gender", "multiple" => "multiple")); ?><br>
    <?php echo form_error('groups[]')."<br>"; ?>
    <!-- select -->

    <input type="submit" value="Register" class="btn btn-info btn-block">
    <?php echo form_close(); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
   
</body>
</html>