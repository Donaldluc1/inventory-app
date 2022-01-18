<?php
include_once("./database/constants.php");
if (isset($_SESSION["userid"])) {
	header("location:http://localhost/public_html/dashboard.php");
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
	<link rel="stylesheet" type="text/css" href="./includes/style.css">
	<script type="text/javascript" rel="stylesheet" src="js/main.js"></script>
</head>
<body>
<div class="overlay"><div class="laoder"></div></div>
	<!-- Navbar -->
	<?php include_once("./templates/header.php"); ?>
	<br> <br>
	<div class="container">
		<?php
			if (isset($_GET["msg"]) AND !empty($_GET["msg"])) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?php echo $_GET["msg"]; ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php
			}
		?>
		<div class="card mx-auto" style="width: 18rem;">
			<img class="card-img-top mx-auto" style="width:60%;" src="./images/user.png" alt="Login Icon">
			<div class="card-body">
			    <form id="form_login" onsubmit="return false">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" name="log_email" id="log_email" placeholder="Enter email">
				    <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" name="log_password" id="log_password" placeholder="Password">
				    <small id="p_error" class="form-text text-muted"></small>
				  </div>
				  <button type="submit" class="btn btn-primary"><i class="fa fa-lock"></i>&nbsp;Submit</button>
				  <span><a href="register.php">Register</a></span>
				</form>
			</div>
			<div class="card-footer"><a href="#">Forget Password ?</a></div>
		</div>
	</div>
</body>
</html>