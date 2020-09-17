<?php
	include 'dbconnect.php';
  	
  	$id=$_POST['id'];
  	$name=$_POST['category_name'];
	

	$photo=$_FILES['category_photo'];
	$oldphoto=$_POST['old_photo'];
	

	echo "$id and $name and $oldphoto <br>";
	print_r($photo);

  ?>