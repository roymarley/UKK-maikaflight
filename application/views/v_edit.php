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
	
	<div id="page">
		<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left">
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">

									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Update data user</h3>
											<form action="<?php echo base_url().'crud/edit/'.$user->id; ?>" method="post">
											
												<div class="row form-group">
													<div class="col-md-12">
														<label for="id">Id</label>
														<input type="hidden" id="Id" name="id" class="form-control" value="<?php echo $user->id ?>">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Username</label>
														<input type="text" id="username" name="username" class="form-control" value="<?php echo $user->username ?>">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Password</label>
														<input type="text" id="password" name="password" class="form-control" value="<?php echo $user->password ?>">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="nama_lengkap">Nama lengkap</label>
														<input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" value="<?php echo $user->nama_lengkap ?>">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="level">Level</label>
														<input type="text" id="level" name="level" class="form-control" value="<?php echo $user->level ?>">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="foto">foto</label>
														<input type="text" id="foto" name="foto" class="form-control" value="<?php echo $user->foto ?>">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="simpan" name="kirim">
													</div>
												</div>
											</form>
										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
	<div class="gototop js-top">
		<a href="#" class="<?= base_url() ?>assets/js/js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?= base_url() ?>assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?= base_url() ?>assets/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="<?= base_url() ?>assets/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="<?= base_url() ?>assets/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url() ?>assets/js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="<?= base_url() ?>assets/js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="<?= base_url() ?>assets/js/main.js"></script>

	
</body>
</html>