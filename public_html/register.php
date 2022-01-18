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
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<div class="overlay"><div class="laoder"></div></div>

	<!-- Navbar -->
	<?php include_once("./templates/header.php"); ?>
	<br> <br>
	<div class="container">
		<div class="card mx-auto" style="width: 30rem;margin: 0 auto;">
			<div class="card-header">Register</div>
			<div class="card-body">
				<form id="register_form" onsubmit="return false" autocomplete="off">
					<div class="form-group">
						<label for="username">Full Name</label>
						<input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
						<small id="u_error" class="form-text text-muted"></small>
					</div>
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
						<small id="e_error" class="form-text text-muted">We'll never share your email with anyone else</small>
					</div>
					<div class="form-group">
						<label for="password1">Password</label>
						<input type="password" name="password1" class="form-control" id="password1" placeholder="Password">
						<small id="p1_error" class="form-text text-muted"></small>
					</div>
					<div class="form-group">
						<label for="password2">Re-enter Password</label>
						<input type="password" name="password2" class="form-control" id="password2" placeholder="Password">
						<small id="p2_error" class="form-text text-muted"></small>
					</div>
					<div class="form-group">
						<label for="usertype">Usertype</label>
						<select name="usertype" class="form-control" id="usertype">
							<option value="">Choose User Type</option>
							<option value="1">Admin</option>
							<option value="0">Other</option>
							<small id="t_error" class="form-text text-muted"></small>
						</select>
					</div>
					<button type="submit" name="user_register" class="btn btn-primary"><span class="fa fa-user"></span>&nbsp;Register</button>
					<span><a href="index.php">Login</a></span>
				</form>
			</div>
			<div class="card-footer text-muted">
			</div>
		</div>
	</div>
</body>
</html>