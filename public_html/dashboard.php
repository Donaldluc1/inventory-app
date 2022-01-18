<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
	header("location:http://localhost/public_html/");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inventory Management System</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<!-- Navbar -->
	<?php include_once("./templates/header.php"); ?>
	<br> <br>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card mx-auto">
					<img class="card-img-top mx-auto" style="width: 60%;" src="./images/login.jpeg" alt="Card image cap">
				  	<div class="card-body">
				    	<h5 class="card-title">Profile Info</h5>
				    	<p class="card-text"><i class="fa fa-user">&nbsp;</i><?= $_SESSION["username"] ?></p>
				    	<p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
				    	<p class="card-text">Last Login : <?php echo date("Y-m-d h:m:s"); ?></p>
				    	<a href="manage_user.php" id="update_user" name="update_user" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
				  	</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="jumbotron" style="width: 100%;height: 100%;">
					<h1>Welcome Admin,</h1>
					<div class="row">
						<div class="col-md-6">
							<iframe src="http://free.timeanddate.com/clock/i6egdh42/n2345/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>
						</div>
						<div class="col-md-6">
							    <div class="card">
								    <div class="card-body">
								        <h5 class="card-title">New Orders</h5>
								        <p class="card-text">Here you can make invoices and create new orders</p>
								        <a href="new_order.php" class="btn btn-primary">New orders</a>
								    </div>
    							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p></p>
	<p></p>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				 <div class="card">
				    <div class="card-body">
				        <h5 class="card-title">Categories</h5>
				        <p class="card-text">Here you can manage your categories and you can add new parent and sub categories</p>
				        <a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary">Add</a>
				        <a href="manage_categories.php" class="btn btn-primary">Manage</a>
				    </div>
    			</div>
			</div>
			<div class="col-md-4">
				 <div class="card">
				    <div class="card-body">
				        <h5 class="card-title">Brands</h5>
				        <p class="card-text">Here you can manage your Brands and you can add new Brands</p>
				        <a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary">Add</a>
				        <a href="manage_brand.php" class="btn btn-primary">Manage</a>
				    </div>
    			</div>
			</div>
			<div class="col-md-4">
				<div class="card">
				    <div class="card-body">
				        <h5 class="card-title">Products</h5>
				        <p class="card-text">Here you can manage your Products and you can add new Products</p>
				        <a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-primary">Add</a>
				        <a href="manage_product.php" class="btn btn-primary">Manage</a>
				    </div>
    			</div>
			</div>
		</div>
	</div>

	<?php
	//category Form
	include_once("./templates/category.php");
	?>

	<?php
	//brand Form
	include_once("./templates/brand.php");
	?>

	<?php
	//products Form
	include_once("./templates/products.php");
	?>
	
</body>
</html>