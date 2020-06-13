<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bimble B'Smart Palembang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

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
	<!-- Navbar File-->
	<?php include('include/navbar.php'); ?>
	<!--main content start-->
	<?php $this->load->view($layout); ?>
	<!--main content end-->

	<!-- Footer File-->
	<?php include('include/footer.php'); ?>

</body>

</html>
