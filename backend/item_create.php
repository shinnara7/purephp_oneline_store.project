 <?php 
 include 'include/header.php'; 
 include 'dbconnect.php';
 ?> 
   <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center">Item Create</h1>
    <div class="row">
    	<div class="offset-md-2 col-md-8">
    		<form method="POST" action="add_item.php" enctype="multipart/form-data">
    			<div class="form-group">
    				<label>Name</label>
    				<input type="text" name="item_name" class="form-control">
    			</div>
    			<div class="form-group">
    				<label>Photo</label>
    				<input type="file" name="item_photo" class="form-control-file">
    			</div>
    			
    			<ul class="nav nav-tabs" id="myTab" role="tablist">
    				<li class="nav-item" role="presentation">
    					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#price" role="tab" aria-controls="home" aria-selected="true">Price</a>
    				</li>
    				<li class="nav-item" role="presentation">
    					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#discount" role="tab" aria-controls="profile" aria-selected="false">Discount</a>
    				</li>
    			</ul>
    			<div class="tab-content" id="myTabContent">
    				<div class="tab-pane fade show active" id="price" role="tabpanel" aria-labelledby="home-tab">

    					<div class="form-group my-3">
    						<input type="number" name="item_price" class="form-control">
    					</div>
    				</div>
    				<div class="tab-pane fade" id="discount" role="tabpanel" aria-labelledby="profile-tab">
    					<div class="form-group my-3">
    						<input type="number" name="item_discount" class="form-control">
    					</div>

    					
    				</div>
    			</div>
    			<div class="form-group">
    				<label>Brand</label>
    				<select name="item_brand" class="form-control">
                    <option>Choose brand</option>
                    <?php
                       $sql="SELECT * FROM brands ";
                       $stmt=$pdo->prepare($sql);
                       $stmt->execute();
                       $brands=$stmt->fetchAll();
                       foreach ($brands as $brand) {
                    ?>
                    <option value="<?= $brand['id']?>"><?=$brand['name']?></option>

                    <?php
                       }
                      ?>
                    </select>
    			</div>
    			<div class="form-group">
    				<label>Subcategory</label>
    				<select name="item_subcat" class="form-control">
                    <option>Choose Subcategory</option>
                    <?php
                       $sql="SELECT * FROM subcategories ";
                       $stmt=$pdo->prepare($sql);
                       $stmt->execute();
                       $subcategories=$stmt->fetchAll();
                       foreach ($subcategories as $subcategory) {
                    ?>
                    <option value="<?= $subcategory['id']?>"><?=$subcategory['name']?></option>

                    <?php
                       }
                      ?>
                    </select>
    			</div>
    			<div class="form-group">
    				<label>Description</label>
    				<textarea class="form-control" name="item_description"></textarea>
    			</div>
    			<input type="submit" class="btn btn-outline-primary float-right mb-3" value="Save">

    		</form>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->

<?php 
 include 'include/footer.php'; 
 ?> 