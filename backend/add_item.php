<?php

	include 'dbconnect.php';
	$name=$_POST['item_name'];
	$price=$_POST['item_price'];
	$discount=$_POST['item_discount'];
	$brand=$_POST['item_brand'];
	$subcategory=$_POST['item_subcat'];
	$description=$_POST['item_description'];

	$photo=$_FILES['item_photo'];

	

	$codeno= "CODE".mt_rand(100000,999999);
	$basepath="images/items/";
	$fullpath=$basepath.$photo['name'];
	move_uploaded_file($photo['tmp_name'], $fullpath);


	$sql="INSERT INTO items (codeno,name,photo,price,discount,description,brand_id,subcategory_id) VALUES (:item_codeno,:item_name,:item_photo,:item_price,:item_discount,:item_description,:item_brand,:item_subcat)";

	$stmt=$pdo ->prepare($sql);
	$stmt->bindParam(':item_codeno',$codeno);
	$stmt->bindParam(':item_name',$name);
	$stmt->bindParam(':item_photo',$fullpath);
	$stmt->bindParam(':item_price',$price);
	$stmt->bindParam(':item_discount',$discount);
	$stmt->bindParam(':item_brand',$brand);
	$stmt->bindParam(':item_description',$description);
	$stmt->bindParam(':item_subcat',$subcategory);

	$stmt->execute();

	if ($stmt->rowCount()) {
		header("location:index.php");
	}else{
		echo "Error!";
	}
  ?>