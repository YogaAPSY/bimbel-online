<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/AdminBsb/login/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/AdminBsb/login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/AdminBsb/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/AdminBsb/login/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/AdminBsb/login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/AdminBsb/login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/AdminBsb/login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/AdminBsb/login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/AdminBsb/login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/AdminBsb/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/AdminBsb/login/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>
	<?php if ($this->session->flashdata('message')) : ?>
		<script type="text/javascript">
			swal({
				title: "BERHASIL !!!",
				text: "<?php echo $this->session->flashdata('message'); ?>",
				showConfirmButton: true,
				type: 'success'
			});
		</script>
	<?php endif; ?>
	<?php if ($this->session->flashdata('abort')) : ?>
		<script type="text/javascript">
			swal({
				title: "ERROR !!!",
				text: "<?php echo $this->session->flashdata('abort'); ?>",
				showConfirmButton: true,
				type: 'error'
			});
		</script>
	<?php endif; ?>

	<div class="limiter">
		<div class="container-login100" style="background:linear-gradient(to right, rgba(2,0,36,1) 0%, rgba(45,45,148,1) 35%, rgba(0,212,255,1) 100%) !important;">
			<div class="wrap-login100">

				<?php $attributes = array('id' => 'login_form', 'class' => 'login100-form validate-form', 'method' => 'post'); ?>

				<?php echo form_open('admin/auth/login', $attributes); ?>
				<span class="login100-form-title p-b-26" style="color: rgba(45,45,148,1)!important;">
					B'Smart Palembang
				</span>
				<span class="login100-form-title p-b-48">
					<i class="zmdi zmdi-font"></i>
				</span>

				<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
					<input class="input100" type="text" name="username">
					<span class="focus-input100" data-placeholder="Username"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter password">
					<span class="btn-show-pass">
						<i class="zmdi zmdi-eye"></i>
					</span>
					<input class="input100" type="password" name="password">
					<span class="focus-input100" data-placeholder="Password"></span>
				</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn" style="background:linear-gradient(to right, rgba(2,0,36,1) 0%, rgba(45,45,148,1) 35%, rgba(0,212,255,1) 100%) !important;"></div>
						<!-- <button class="login100-form-btn" type="submit" name="login">
							Login
						</button> -->
						<input type="submit" name="login" value="login" class="login100-form-btn">
					</div>
				</div>

				<div class="text-center p-t-80">

				</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/AdminBsb/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/AdminBsb/login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/AdminBsb/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url(); ?>assets/AdminBsb/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/AdminBsb/login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/AdminBsb/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url(); ?>assets/AdminBsb/login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/AdminBsb/login/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/AdminBsb/login/js/main.js"></script>

</body>

</html>
