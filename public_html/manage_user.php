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
	<script type="text/javascript" src="js/manage.js"></script>
</head>
<body>

	<!-- Navbar -->
	<?php include_once("./templates/header.php"); ?>
	<br><br>
	<div class="container">
		 <table class="table table-hover table-bordered">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th>Full Name</th>
		        <th>Email Address</th> 
		        <th>UserType</th>
		        <th>Action</th>
		      </tr>
		    </thead>
		    <tbody id="get_user">
		     <!-- <tr>
		        <td>1</td>
		        <td>Electronics</td>
		        <td>Root</td>
		        <td><a href="#" class="btn btn-success btn-sm">Active</a></td>
		        <td>
		        	<a href="#" class="btn btn-danger btn-sm">Delete</a>
		        	<a href="#" class="btn btn-info btn-sm">Edit</a>
		        </td>
		      </tr>-->
		    </tbody>
	    </table>
	</div>


	<?php
		include_once("./templates/update_user.php");
	?>

</body>
</html>