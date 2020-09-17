<?php
	include 'dbconnect.php';
  	
  	$id=$_POST['id'];
  	$name=$_POST['brand_name'];
	

	$logo=$_FILES['brand_logo'];
	$oldlogo=$_POST['old_logo'];
	

	echo "$id and $name and $oldlogo <br>";
	print_r($logo);

  ?>