<?php
include_once('../service/dbcon.php');

if (isset($_POST['login'])) {
	$userid = $_POST['username'];
	$passwd = $_POST['pass'];

	$query = "SELECT * FROM users WHERE userid ='".$userid."'  AND passwd = '".$passwd."'";
	$res = mysqli_query($con,$query);
	if ($row = mysqli_fetch_array($res)) {
		session_start();
		$_SESSION['userid'] = $userid;
		$_SESSION['type'] = $row['type'];
		$_SESSION['fullname'] = $row['fullname'];
		header("Location: ../dashboard/index.php?modal=true");
	}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-012.jpg');">
			<div class="wrap-login100" style="width: 33%; height: 550px">
				<form class="login100-form validate-form" style="height: 460px; width: 380px; position: relative; right:25px; top: -20px;" method="post" action="index.php?action=login">
					<?php
						if (isset($_GET['logout'])) {
							echo '<div class="alert alert-info" style="font-family: fantasy; padding: 1% 2% 1% 2%; text-align: center; margin-bottom: 2%">Logged out successfully!</div>';
							session_start();
							session_unset();
							session_destroy();
						}
					?>

					<div class="alert alert-warning" style="display: none; font-family: fantasy; padding: 1% 2% 1% 2%; text-align: center; margin-bottom: 2%" id="alert" >Invalid login details!</div>
					<?php
						error_reporting(E_ALL & ~E_NOTICE);
						if (isset($_POST['login']) && !$row) {
							echo '<script type="text/javascript">document.getElementById("alert").style.display="";</script>';
						}
					?>
					
					

					<span class="login100-form-logo">
						<img src="../media/emblem.png" style="height: 72%">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						LogIn 
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>



					<div class="container-login100-form-btn">
						<button name="login" type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center">
						<a class="txt1" href="#"  style="position: relative; top: 15px;">
							Forgot Password?
						</a>
						<p  style="text-align: right;color: #c9d0d4; font-size: 10px;position: relative;right:25%;top:50px">Suman Michael 2018. All Rights Reserved.</p>
					</div>

				</form>
			</div>

		</div>

	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>