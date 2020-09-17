<?php
	include 'include/header.php';
  ?>
  <div class="container-fluid mt-5">
  	<div class="row">
  		<div class="offset-md-3 col-md-6">
  			<form method="POST" action="#">
  				<div class="form-group">
  					<label>User Name:</label>
  					<input type="text" name="name" class="form-control">
  				</div>
  				<div class="form-group">
  					<label>Password</label>
  					<input type="password" name="password" class="form-control">
  				</div>
  				<input type="submit" value="Login" class="btn btn-outline-success float-right mb-4">
  			</form>
  			</div>
  		</div>
  </div>