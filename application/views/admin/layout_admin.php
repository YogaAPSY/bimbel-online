<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Welcome To | B'Smart Admin</title>
	<!-- Favicon-->
	<link rel="icon" href="<?= base_url(); ?>assets/AdminBsb/favicon.ico" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?= base_url(); ?>assets/AdminBsb/plugins/node-waves/waves.css" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?= base_url(); ?>assets/AdminBsb/plugins/animate-css/animate.css" rel="stylesheet" />

	<!-- Morris Chart Css-->
	<link href="<?= base_url(); ?>assets/AdminBsb/plugins/morrisjs/morris.css" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?= base_url(); ?>assets/AdminBsb/css/style.css" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?= base_url(); ?>assets/AdminBsb/css/themes/all-themes.css" rel="stylesheet" />
	<!-- JQuery DataTable Css -->
	<link href="<?= base_url(); ?>assets/AdminBsb/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
</head>

<body class="theme-red">

	<!-- Navbar File-->
	<?php include('include/navbar_admin.php'); ?>
	<!--main content start-->
	<?php $this->load->view($layout); ?>
	<!--main content end-->

	<!-- Footer File-->
	<?php include('include/footer_admin.php'); ?>

</body>

</html>
