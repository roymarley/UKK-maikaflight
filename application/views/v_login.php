<!-- HTML -->
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>www.traveler.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?= base_url() ?>assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
	<div class="container">
		<div class="tab-content">
			<div class="tab-content-inner active" data-content="signup">
				<h3>Login to Traveler</h3>
				<form action="<?= base_url('login/aksi_login'); ?>" method="post">
					<div class="row form-group">
						<div class="col-md-12">
							<label for="fullname">Username</label>
							<input type="text" name="username" class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="fullname">Username</label>
							<input type="password" name="password" class="form-control">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<input type="submit" class="btn btn-primary btn-block" value="Login">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<a href="<?= base_url() ?>" class="btn btn-primary btn-block">Main Page</a>
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>
</body>
</html>