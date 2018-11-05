<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('style.css');?>">
</head>
<body>
	<h1>UpDate Record</h1>
<form method="post" id="form" enctype="multipart/form-data" action="<?php echo base_url('welcome/update/');echo $up->id;?>">

<tr><input style="width: 450px; height: 30px; padding: 10px;" placeholder="Enter counrty Name" type="text" name="country" value="<?php echo $up->country; ?>"></tr><br><br>

<tr><input style="width: 450px; height: 30px; padding: 10px;" placeholder="Enter counrty Code" type="text" name="code" value="<?php echo $up->country_code;?>"></tr><br><br>

<tr><input style="width: 450px; height: 30px; padding: 10px;" placeholder="Enter counrty Phone" type="text" name="phone" value="<?php echo $up->phone; ?>" ></tr><br><br>

<tr><input style="width: 450px; height: 30px; padding: 10px;" placeholder="Enter counrty No" type="text" name="no" value="<?php echo $up->country_no;?>"></tr>
<tr><input type="file" name="userfile" size="20"></tr>
<br><br>

<input type="submit" id="submit" name="sub" value="UpDate Record">

</form>

</body>
</html>