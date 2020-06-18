 <!-- Bootstrap DatePicker Css -->
 <link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
 <link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" />

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

 <style>
 	@media screen and (max-width: 576px) {
 		.hp {
 			display: none;
 		}
 	}
 </style>

 <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url(); ?>assets/User/images/bg_2.jpg');">
 	<div class="overlay"></div>
 	<div class="container">
 		<div class="row no-gutters slider-text align-items-center justify-content-center">
 			<div class="col-md-9 ftco-animate text-center">
 				<h1 class="mb-2 bread">Profil Siswa</h1>
 				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pendaftaran <i class="ion-ios-arrow-forward"></i></span></p>
 			</div>
 		</div>
 	</div>
 </section>

 <section class="ftco-section contact-section">
 	<div class="container">
 		<div class="row d-flex mb-5 contact-info">
 			<!-- <div class="col-md-4">
                 <div class="bg-light align-self-stretch box p-4 text-center">
                     <h3 class="mb-4">Foto Profil</h3>
                     <img src="" alt="">
                 </div>
             </div> -->
 			<div class="col-md-12 d-flex">

 				<div class="bg-light align-self-stretch box p-4 " style="border-radius: 1%;">
 					<div class="col-md-12 text-center heading-section ftco-animate">
 						<h2 class="mb-4" class="hp"><span>FORM </span>PROFIL <span>SISWA</span></h2><br>
 					</div>
 					<?php $attributes = array('method' => 'post'); ?>

 					<?php echo form_open_multipart('siswa/profile', $attributes); ?>
 					<div class="row clearfix">

 						<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <h5>Judul Kelas</h5>
						 </div> -->

 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<div class="form-group" style="margin-bottom: 1.8rem;">
 								<div class="form-line">

 									<center><img src="<?= base_url(); ?>assets/upload/foto/<?= $profile['foto'] ?>" alt="" style="min-height:220px;max-height:220px;min-width:340px;max-width:340px;"></center>
 									<center><input type="file" name="foto" onchange="cekJpg(this)" accept="image/jpeg,image/png,image/jpg"></center>
 								</div>
 							</div>
 						</div>
 					</div>

 					<div class="row clearfix">

 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<h5 style="color:#5f666c;font-size:18px;">Nama Lengkap :</h5>
 						</div>

 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<div class="form-group" style="margin-bottom: 1.8rem;">
 								<div class="form-line">
 									<input type="text" class="form-control" value="<?= (isset($profile['nama']))  ? $profile['nama'] : ""; ?>" name="nama"> </label>
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="row clearfix">
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<h5 style="color:#5f666c;font-size:18px;">Nomor Hp :</h5>
 						</div>
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<div class="form-group" style="margin-bottom: 1.8rem;">
 								<div class="form-line">
 									<input type="number" class="form-control" placeholder="No HP" name="no_hp" value="<?= (isset($profile['no_hp']))  ? $profile['no_hp'] : ""; ?>" required autocomplete="off" />
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="row clearfix">
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<h5 style="color:#5f666c;font-size:18px;">Tempat Lahir :</h5>
 						</div>
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<div class="form-group" style="margin-bottom: 1.8rem;">
 								<div class="form-line">
 									<input type="text" class="form-control" placeholder="Tempat Lahir" value="<?= (isset($profile['tempat_lahir']))  ? $profile['tempat_lahir'] : ""; ?>" name="tempat_lahir" required autocomplete="off" />
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="row clearfix">
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<h5 style="color:#5f666c;font-size:18px;">Tanggal Lahir :</h5>
 						</div>
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<div class="form-group" style="margin-bottom: 1.8rem;">
 								<div class="form-line">
 									<input type="text" class="form-control datepicker" placeholder="Tanggal Lahir" value="<?= (isset($profile['tanggal_lahir']))  ? $profile['tanggal_lahir'] : ""; ?>" name="tanggal_lahir" required autocomplete="off" />
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="row clearfix">
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<h5 style="color:#5f666c;font-size:18px;">Umur :</h5>
 						</div>
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<div class="form-group" style="margin-bottom: 1.8rem;">
 								<div class="form-line">
 									<input type="number" readonly id="umur" class="form-control" placeholder="Umur" value="<?= (isset($profile['umur']))  ? $profile['umur'] : ""; ?>" name="umur" required autocomplete="off" />
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="row clearfix">
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<h5 style="color:#5f666c;font-size:18px;">Pendidikan :</h5>
 						</div>
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<div class="form-group" style="margin-bottom: 1.8rem;">
 								<div class="form-line">
 									<input type="text" class="form-control" placeholder="Pendidikan" value="<?= (isset($profile['pendidikan']))  ? $profile['pendidikan'] : ""; ?>" name="pendidikan" required autocomplete="off" />
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="row clearfix">
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<h5 style="color:#5f666c;font-size:18px;">Jenis Kelamin :</h5>
 						</div>
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<div class="form-group" style="margin-bottom: 1.8rem;">
 								<div class="form-line">
 									<select name="jenis_kelamin" id="asd" class="form-control">
 										<option value="" selected="" disabled="">-- Pilih Jenis Kelamin --</option>
 										<?php foreach ($jenis_kelamin as $jenis) : ?>
 											<?php if ($profile['jenis_kelamin'] == $jenis['value']) : ?>
 												<option value="<?= $jenis['value']; ?>" selected> <?= $jenis['nama']; ?> </option>

 											<?php else : ?>
 												<option value="<?= $jenis['value']; ?>"> <?= $jenis['nama']; ?> </option>
 											<?php endif; ?>
 											<!-- <option value="<?= $jenis['value'] ?>"><?= $jenis['nama'] ?></option> -->
 										<?php endforeach; ?>

 									</select>

 								</div>
 							</div>
 						</div>
 					</div>

 					<div class="row clearfix">
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<h5 style="color:#5f666c;font-size:18px;">Alamat :</h5>
 						</div>
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<div class="form-group" style="margin-bottom: 1.8rem;">
 								<div class="form-line">
 									<input type="text" class="form-control" value="<?= (isset($profile['alamat']))  ? $profile['alamat'] : ""; ?>" placeholder="Alamat" name="alamat" required autocomplete="off" />
 								</div>
 							</div>
 						</div>
 					</div>
 					<br>
 					<div class="row clearfix">
 						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 							<center><input type="submit" name="submit" value="EDIT PROFILE" class="btn btn-warning" style="color: white;font-size:24px;width:300px;height:60px;"></center>
 							<!-- <center><a href="<?= base_url(); ?>/home/form"><button class="btn btn-warning" style="color: white;font-size:24px;width:300px;height:60px;">EDIT PROFIL</button></a></center> -->
 						</div>
 					</div>
 					</form>
 					<br>
 				</div>
 			</div>

 		</div>
 	</div>
 </section>
