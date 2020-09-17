<?php
include 'include/header.php';
include 'dbconnect.php';
?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Category List</h1>
      <a href="category_create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-cart-plus"></i>Add Category</a>
    </div>

    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                	<thead>
                		<tr>
                			<th>#</th>
                			<th>Category Name</th>
                			<th>Action</th>
                		</tr>
                	</thead>
                	<tfoot>
                		<tr>
                			<th>#</th>
                			<th>Category Name</th>
                			<th>Action</th>
                		</tr>
                	</tfoot>
                	<tbody>
                		<?php 
                            $i=1;
                			$sql="SELECT * FROM categories";
                			$stmt=$pdo->prepare($sql);
                			$stmt->execute();
                			$categories=$stmt->fetchAll();
                			foreach ($categories as $category) {
                		?>
                		<tr>
                			<td><?=$i++?></td>
                			<td><?=$category['name'] ?></td>
                			
                			

                			<td>
                				<a href="category_edit.php?id=<?=$category['id']?>" class="btn btn-warning btn-sm">Edit</a>
                				<a href="category_delete.php?id=<?=$category['id']?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this item?')">Delete</a>
                			</td>
                        </tr>
                		<?php
                			}
                		 ?>
                	</tbody>
                </table>
              </div>
            </div>
          </div>
</div>
<?php
include 'include/footer.php';
  ?>