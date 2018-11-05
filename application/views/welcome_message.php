<!DOCTYPE html>
<html>
<head>
	<title>this is sampile table work</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('style.css');?>">
  <script type="text/javascript" src="<?php echo base_url('jjjj.js');?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('jquery-ui.css');?>" />
  
    <script type="text/javascript" src="<?php echo base_url('jquery-ui.js');?>"></script>
    <script type="text/javascript">
  $(document).ready(function() {
     $('#ss').autocomplete({
        source: "<?php echo site_url('welcome/get/?'); ?>"
    });
 
  });
  </script>
</head>
<body>
<h1>Wellcome</h1>

  


  <input type="text" id="ss" name="data" placeholder="Enter Text for Search" style="margin-left: 300px; height: 50px; width: 600px; border-radius: 10px; font-size: 40px; padding-left: 15px;">

  
  

<table class="table">
  <tr id="tr">
    <td>Employee Name</td>
    <td>Employee code</td>
    <td>Employee phone</td>
    <td>Employee no</td>
    <td>image</td>
      </tr>
  <?php foreach($data as $d){ ?>

  <tr id="trr">

    <td><a href="<?= base_url('welcome/more/');echo $d->id;?>"><?php echo $d->country; ?></a></td>
    <td><?php echo $d->country_code; ?></td>
    <td><?php echo $d->phone; ?></td>
    <td><?php echo $d->country_no; ?></td>
    <td><img src="<?php echo base_url('/upload/');echo $d->image;?>" style="width: 100px; height: 100px;" ></td>
    
  </tr>


 <?php } ?>
</table> <br>
<a id="a" href="<?= base_url('welcome/addRecord');?>">Add new Record</a><br><br><br><br>

<?= $this->pagination->create_links(); ?>
<div class="footer"><p>&copy All Right Resrved </p></div>
</body>
</html>