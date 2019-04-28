<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<h2>Update Product</h2>
<?php 
$id = $result_data_book['select_book'][0]['id']
?>
<?php echo form_open('book/update_book', array('role'=>'form')) ?>
<input type='hidden' value="<?php echo $id; ?>" name='id'>
<span>Code: </span><input name="code" value="<?php echo $result_data_book['select_book'][0]['code'] ?>"><br/>
<span>Name</span>
<textarea name="name" rows="4" cols="50">
<?php echo $result_data_book['select_book'][0]['name'] ?>
</textarea><br/>
<span>ราคา: </span><input name="price" value="<?php echo $result_data_book['select_book'][0]['price'] ?>"><br/>
<input type="submit" value="Update Products" class="btn btn-info btn-block">
<?php echo form_close(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
