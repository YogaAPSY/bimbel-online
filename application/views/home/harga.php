<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url(); ?>assets/User/images/bg_2.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Daftar Harga</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Daftar Harga <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section" style="padding: 4em 0 !important">
	<div class="container">

		<div class="row">
			<?php $i = 1;
			foreach ($kelas as $kel) : ?>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="pricing-entry bg-light pb-4 text-center">
						<div>
							<h3 class="mb-3"><?= $kel['judul_kelas'] ?></h3>
							<p class="subheading"><span>Class day:</span> <?= $kel['jadwal_kelas'] ?></p>
							<p class="subheading"><span>Class time:</span> <?= $kel['waktu_kelas'] ?></p>
							<p><span class="price">Rp. <?= $kel['harga_kelas'] ?></span> <span class="per">/ Bulan</span></p>
						</div>
						<div class="img" style="background-image: url(<?= base_url(); ?>assets/User/images/bg_<?= $i++; ?>.jpg);"></div>
						<div class="px-4">
							<p><?= $kel['deskripsi_kelas'] ?></p>
						</div>
						<?php if ($this->session->userdata('is_user_login') == true) : ?>
							<p class="button text-center"><a href="<?= base_url('home/form') ?>" class="btn btn-primary px-4 py-3">Take A Course</a></p>
						<?php elseif ($this->session->userdata('is_admin_login') == true) : ?>
							<p class="button text-center"><a href="<?= base_url('auth/login') ?>" class="btn btn-primary px-4 py-3">Take A Course</a></p>
						<?php else : ?>
							<p class="button text-center"><a href="<?= base_url('auth/login') ?>" class="btn btn-primary px-4 py-3">Take A Course</a></p>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
