<form action="exam_check" method="post">
<?php
foreach($get_query as $row)
{
    $no = $row['no_number'];
    $question = $row['question'];
    $choice1 = $row['choice1'];
    $choice2 = $row['choice2'];
    $choice3 = $row['choice3'];
    $choice4 = $row['choice4'];

    echo "<b>ข้อที่ $no. $question ? </b><br>\n";

    echo "<input type='radio' name='q$no' value=ก>$choice1<br>\n";
    echo "<input type='radio' name='q$no' value=ข>$choice2<br>\n";
    echo "<input type='radio' name='q$no' value=ค>$choice3<br>\n";
    echo "<input type='radio' name='q$no' value=ง>$choice4<br>\n";
    
}
?>
<p>
<input type="submit" name="submit" value="ส่งคำตอบ">
<input type="reset" name="reset" value="ยกเลิก">
</form>
</p>
<button onclick="history.go(-1);">Back </button>