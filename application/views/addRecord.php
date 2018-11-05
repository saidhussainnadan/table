<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('style.css');?>">
	<script type="text/javascript" src="<?php echo base_url('jjjj.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/m/jquery.inputmask.date.extensions.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/m/jquery.inputmask.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/m/jquery.inputmask.numeric.extensions.js'); ?>"></script>
<script type="text/javascript">
  $(document).ready(function(e){
  

  $("#s").inputmask({"mask": "99999999"}); 
   $("#ss").inputmask({"mask": "99999999"}); 
    $("#sss").inputmask({"mask": "99999999"}); 
});
 

</script>


</head>
<body>
	<h1>Add New Record</h1>
<form method="post" id="form" enctype="multipart/form-data" action="<?php echo base_url('welcome/addRecord1');?>">

<tr><input style="width: 450px; height: 30px; padding: 10px;" placeholder="Enter counrty Name" type="text" name="country"></tr><br><br>
<tr><input id="s" style="width: 450px; height: 30px; padding: 10px;" placeholder="Enter counrty Code" type="text" name="code"></tr><br><br>
<tr><input id="ss" style="width: 450px; height: 30px; padding: 10px;" placeholder="Enter counrty Phone" type="text" name="phone"></tr><br><br>
<tr><input id="sss" style="width: 450px; height: 30px; padding: 10px;" placeholder="Enter counrty No" type="text" name="no"></tr>
<tr><input type="file" name="userfile" size="20"></tr><br><br>
<input type="submit" id="submit" name="sub" value="Add New Record">

</form>

</body>
</html>