<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('style1.css');?>">
</head>
<body>

	
	
    <div class="main">
    	<img id="mm2" src="<?php echo base_url('/upload/');echo $up->image;?>"  >
<h1>Hi : <?php echo $up->country; ?></h1>

<hr>
	<img src="<?php echo base_url('/upload/');echo $up->image;?>"   >

	<h2>Employee Name is  :    <?php echo $up->country; ?></h2>
	<h3>Employee Code is  :    <?php echo $up->country_code;?></h3>
	<h3>Employee Phone is :    <?php echo $up->phone; ?></h3>
	<h3>Employee No is    :    <?php echo $up->country_no;?></h3>
	 <a id="a" href="<?= base_url('welcome/Edit/');echo $up->id;?>">Edit</a>
    <a id="del" href="<?= base_url('welcome/delet/');echo $up->id;?>">Delete</a><br><br>
    <a id="a" href="<?= base_url('welcome');?>">Back to Home</a><br>
    </div>
	








	

    

</body>
</html>