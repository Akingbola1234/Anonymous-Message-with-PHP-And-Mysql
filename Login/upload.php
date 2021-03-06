<?php
include_once 'includes/dbh.php';
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anonymous</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logo-icon.png"/>
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
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 pt-3 p-b-54">
			<?php
			$fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			if (strpos($fullUrl, "upload=Error") == true) {
				echo '<div class=" text-center alert alert-danger" role="alert" id="alert">Upload Error!!!</div>';
			}
			?>
			<script>
			let alert = document.querySelector("#alert");
			setTimeout(function(){$(alert).fadeOut();}, 10000);
			</script>
			<img src="images/logo-icon.png" alt="" id="img-logo" class="mb-3">
				<form class="login100-form validate-form" method="POST" action="includes/upload-image.php" enctype="multipart/form-data">
					<span class="login100-form-title pb-2">
						Upload Your Profile
					</span>
					<div class="wrap-input100 m-b-23">
						<input class="input100" type="file" name="image" required>
                    </div>
                    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="upload-image" >
                            <i class="fa fa-long-arrow-right" style="margin-right: 10px;"></i>UPLOAD
							</button>
						</div>
                    </div><br>
                    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="home.php" class="login100-form-btn">
                            <i class="fa fa-long-arrow-left" style="margin-right: 10px;"></i> Go Back 
							</a>
						</div>
                    </div><br>
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