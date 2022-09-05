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
			<center><h3 class = "white">User Login Form</h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label class = "white" for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label class = "white" for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</form>

			<?php
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								$_SESSION['id'] = $row['id'];
								header("Location:user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>
		</div>
		<div class="col-md-4" ></div>
	</div>
</body>
</html>