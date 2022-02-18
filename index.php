<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cynnal IT</title>
<meta name="description" content="Cynnal IT short description" />
<meta name="keywords" content="Cynnal IT, Networking" />
<meta name="author" content="Cynnal IT" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="Cache-control" content="public, max-age=3600, must-revalidate">
<!-- Fav Icon -->
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="manifest" href="images/favicon/site.webmanifest">
<link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="images/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="images/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<!-- Schema.org markup for Google+ -->
<!-- Twitter Card data -->
<!-- Open Graph data -->
<meta property="og:title" content="CynnalIT">
<meta property="og:site_name" content="Cynnal IT">
<meta property="og:url" content="http://cynnalit.co.uk">
<meta property="og:description" content="Up to 200 Characters here">
<meta property="og:type" content="business.business">
<meta property="og:image" content="http://cynnalit.co.uk/images/CynnalIT.jpg">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-danger">
<div class="container-contact100">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6"><img src="images/CynnalIT.jpg" border="0" class="img-fluid rounded-pill"></div>
		<div class="col-3"></div>
	</div>
	<div class="wrap-contact100">
		<?php if (isset($_GET['thanks'])) { ?>
			<div class="alert alert-success" role="alert">
				<h4 class="alert-heading">Thank you!</h4>
				<p>Your message has been sent.</p>
				<p class="mb-0"><a href="/">Back</a></p>
		</div>
		<?php } else { ?>
		<form action="db-insert.php" class="contact100-form validate-form" method="post">
			<div class="wrap-input100 validate-input" data-validate="Please enter your name">
				<input class="input100" type="text" name="name" id="name" placeholder="Full Name">
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
				<input class="input100" type="text" name="email" id="email" placeholder="E-mail">
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
				<input class="input100" type="text" name="phone" id="phone" placeholder="Phone">
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
				<textarea class="input100" name="message" id="message" placeholder="Your Message"></textarea>
				<span class="focus-input100"></span>
			</div>

			<div class="container-contact100-form-btn">
				<button class="contact100-form-btn">
					<span><i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i> Send</span>
				</button>
			</div>
		</form>
		<?php } ?>
	</div>
</div>

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