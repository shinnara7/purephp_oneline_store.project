 <?php 
 include 'include/header.php'; 
 include 'dbconnect.php';

 $id=$_GET['id'];
 $sql="SELECT * FROM brands WHERE id=:id";
 $stmt=$pdo->prepare($sql);
 $stmt->bindParam(':id',$id);
 $stmt->execute();
 $brand=$stmt->fetch(PDO::FETCH_ASSOC);

 ?> 

<h1 class="h3 mb-4 text-gray-800 text-center">Brand Create</h1>
    <div class="row">
    	<div class="offset-md-2 col-md-8">
    		<form method="POST" action="updatebrand.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$brand['id']?>">
    			<div class="form-group">
    				<label>Name</label>
    				<input type="text" name="brand_name" class="form-control" value="<?=$brand['name']?>">
    			</div>
    			<div class="form-group">
    				<label>Logo</label>
    				<input type="file" name="brand_logo" class="form-control-file">
                    <img src="<?=$brand['logo']?>" width="150" height="120" class="mt-3">
                     <input type="hidden" name="old_logo" value="<?=$brand['logo']?>">
    			</div>
    			<input type="submit" class="btn btn-outline-primary float-right mb-3" value="Update">

    		</form>

<?php 
 include 'include/footer.php'; 
 ?> 