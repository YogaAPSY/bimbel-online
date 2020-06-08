<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	<div class="container d-flex align-items-center">
		<a class="navbar-brand" href="#">B'Smart</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="<?= base_url(); ?>" class="nav-link pl-0">Home</a></li>
				<li class="nav-item"><a href="<?= base_url(); ?>Home/tentang" class="nav-link">Tentang</a></li>
				<li class="nav-item"><a href="<?= base_url(); ?>Home/kursus" class="nav-link">Kursus</a></li>
				<li class="nav-item"><a href="<?= base_url(); ?>Home/kelas" class="nav-link">Kelas</a></li>
				<li class="nav-item"><a href="<?= base_url(); ?>Home/kontak" class="nav-link">Kontak</a></li>
				<?php if ($this->session->userdata('is_user_login') == true) : ?>
					<li class="nav-item"><a href="#" class="nav-link">Hi, <?= $this->session->userdata('username')  ?></a></li>
				<?php elseif ($this->session->userdata('is_admin_login') == true) : ?>
					<li class="nav-item"><a href="<?= base_url(); ?>auth/login" class="nav-link">Login</a></li>
				<?php else : ?>
					<li class="nav-item"><a href="<?= base_url(); ?>auth/login" class="nav-link">Login</a></li>
				<?php endif; ?>

			</ul>
		</div>
	</div>
</nav>
<!-- END nav -->
