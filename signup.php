<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		.bg{
			width: 100%;
			position: absolute;
			z-index: -1;
			
			height: 700px;
		}
		.white{
			color:white;
		}
	</style>
</head>
<body>
	<img class="bg" src="bg1.jpg" alt="">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Online Book Management System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="admin/index.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">User Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Register</a>
				</li>
			</ul>
		</div>
	</nav><br>
	<br><br>
	<div class="row">
		<div class="col-md-4" ></div>		
		<div class="col-md-4" id="main_content">
			<center><h3 class = "white">User Registration Form</h3></center>
			<form action="register.php" method="post">
				<div class="form-group">
					<label class = "white" for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label class = "white" for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label class = "white" for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label class = "white" for="name">Mobile Number:</label>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					<label class = "white" for="name">Address:</label>
					<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
		<div class="col-md-4" ></div>
	</div>
</body>
</html>