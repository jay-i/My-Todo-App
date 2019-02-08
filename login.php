<?php
include_once('libs/login_users.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Login Page</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css.map">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css.map">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css.map">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css.map">
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>

</head>
<body>
	<div id="wrapper">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<a class="brand" href="#">
							My Todo App
						</a>
					</div>
				</div>
			</div><!-- end nav -->
			
			<div id="content">
			
			<?php 
				if(isset($error)){ echo '<div class="alert alert-danger">'.$error.'</div>';}
			
			?>
			
				<div class="login_form">
				<h3>Login Here</h3>
				<div id="form">
					<form method="post" action="login.php">
						<div class="form_elements">
							<label for="Username">Username</label><br />
							<input type="text" name="username" id="username" />
						</div><!-- end login_form -->
						
						<div class="form_elements">
							<label for="Password">Password</label><br />
							<input type="password" name="password" id="password" />
						</div><!-- end login_form -->
						
						<div class="form_elements1"><br />
							<input type="submit" name="login" id="login" value="Login" class="btn btn-success"/>
						</div><!-- end login_form --><br />
						Don't have an account? <a href="register.php" class="reg">Register</a>
			</div><!-- end login_form -->
			</form>
		</div><!-- end form -->
			</div><!-- end content -->
			
			
	</div>
