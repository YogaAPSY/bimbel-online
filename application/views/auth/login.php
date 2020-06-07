<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bimble B'Smart Palembang</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- MATERIAL DESIGN ICONIC FONT -->

	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">


	<!-- STYLE CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/login/css/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/animate.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/magnific-popup.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/aos.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/ionicons.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/icomoon.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/style.css">


<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
		<div class="container d-flex align-items-center">
			<a class="navbar-brand" href="#">B'Smart</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="http://localhost/bimbel-online" class="nav-link pl-0">Home</a></li>
					<li class="nav-item"><a href="http://localhost/bimbel-online/Home/tentang" class="nav-link">Tentang</a></li>
					<li class="nav-item"><a href="http://localhost/bimbel-online/Home/kursus" class="nav-link">Kursus</a></li>
					<li class="nav-item"><a href="http://localhost/bimbel-online/Home/harga" class="nav-link">Harga</a></li>
					<li class="nav-item"><a href="http://localhost/bimbel-online/Home/kontak" class="nav-link">Kontak</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="wrapper">
		<div class="image-holder">
			<img src="<?= base_url(); ?>assets/User/login/images/registration-form-8.jpg" alt="">
		</div>
		<div class="form-inner">
			<?php $attributes = array('id' => 'login_form', 'method' => 'post'); ?>

			<?php echo form_open('auth/login', $attributes); ?>
			<div class="form-header">
				<h3 style="color: white; font-size: 40px;font-family: ChelseaMarket-Regular;margin: 0;">Sign in</h3>
				<img src="<?= base_url(); ?>assets/User/login/images/sign-up.png" alt="" class="sign-up-icon">
			</div>
			<div class="form-group">
				<label style="color: white;" for="">Username:</label>
				<input type="text" name="username" class="form-controllogin" data-validation="length alphanumeric" data-validation-length="3-12">
			</div>

			<div class="form-group">
				<label style="color: white;" for="">Password:</label>
				<input type="password" name="password" class="form-controllogin" data-validation="length" data-validation-length="min8">
			</div>

			<input type="submit" name="login" value="Masuk" class="buttonlogin">
			<br>
			<center> Belum Punya Akun ?
				<a href="<?= base_url('auth/registration'); ?>">
					<p>Daftar Sekarang</p>
				</a>
			</center>

			</form>
		</div>

	</div>

	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


	<script src="<?= base_url(); ?>assets/User/js/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/popper.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/jquery.stellar.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/owl.carousel.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/aos.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/jquery.animateNumber.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="<?= base_url(); ?>assets/User/js/google-map.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/main.js"></script>


	<script src="<?= base_url(); ?>assets/User/login/js/jquery.form-validator.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/login/js/main.js"></script>

</body>

</html>