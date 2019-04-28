<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Select update delete</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
<?php if($this->session->flashdata('UpdateSucess')) { ?>
<div class="alert alert-success" role="alert">
<strong><?php echo $this->session->flashdata('UpdateSucess') ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<?php if($this->session->flashdata('DeleteSucess')) { ?>
<div class="alert alert-success" role="alert">
<strong><?php echo $this->session->flashdata('DeleteSucess') ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
้<h2>เพิ่มข้อมูล</h2>
<div>

Code : <input type="text" id="code" name="code"> 
Name : <input type="text" id="name" name="name">
Price : <input type="text" id="price" name="price">
<button id="btn_insert_val">Insert</button>

</div><br/>
<div id="insert_sucess">
</div>
<div id="insert_sucess_data">
</div><br>
<div id="time">
</div>
<h2>HTML Table</h2>
<table>
  <tr>
    <th>No</th>
    <th>Code</th>
    <th>Name</th>
    <th>Price</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php foreach($data_select as $key => $data_selects) { ?>
  <tr>
    <td><?php echo $key + 1 ?></td>
    <td><?php echo $data_selects['code']; ?></td>
    <td><?php echo $data_selects['name']; ?></td>
    <td><?php echo $data_selects['price']; ?></td>
    <td><a href="javascript:void(0);" onclick="edit_book(<?php echo $data_selects['id']; ?>)">Edit</a></td>
    <td><a href="javascript:void(0);" onclick="delete_book(<?php echo $data_selects['id']; ?>)">Delete</a></td>
  </tr>
  <?php } ?>
</table> 

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script type="text/javascript">
    var url="<?php echo base_url();?>";
    function edit_book(id){
      event.preventDefault()
          window.location = url+"book/select_update_book/"+id;
        } 
    function delete_book(id){
       var r=confirm("Do you want to delete this?")
        if (r==true)
          window.location = url+"book/delete_book/"+id;
        else
          return false;
        } 
$( document ).ready(function() {
  $("#btn_insert_val").click(function(){
		var senddata = [{
    	code: $("#code").val(),
    	name: $("#name").val(), 
      price: $("#price").val(), 
  		}];
		$.ajax({
			method: "POST",
			data: {myData: senddata},
			url: "book/get_ajax_book",
		})
		.done(add)
		.fail(function(){
			alert("OH NO! FAILED");
		});
	});
	function add (data)
	{
      $('#insert_sucess').html('<div class="alert alert-success" role="alert">' + '<strong>Insert Sucess</strong>' 
      + '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' + '<span aria-hidden="true">&times;</span></button></div>');
      $('#insert_sucess_data').html(data);
    $(window).ready( function() {
      var time = 20
      setInterval( function() {
       time--;
       $('#time').html('<span>รีเฟรชข้อมูลในอีก : </span>' + time + '<span> วินาที</span>');
       if (time === 0) {
        window.location.reload(1);
       }    
   }, 1000);
  });
	}
});
</script>
</body>
</html>