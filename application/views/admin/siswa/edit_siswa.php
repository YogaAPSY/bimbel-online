            <!-- Bootstrap Select Css -->
            <link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

            <section class="content">
            	<div class="container-fluid">
            		<div class="block-header">
            			<h2>B'SMART MANAJEMEN USER</h2>
            		</div>

            		<!-- Input -->
            		<div class="row clearfix">
            			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            				<div class="card">
            					<div class="header">
            						<h2 style="font-weight: bold;color: #ad1455;font-size: 22px;">
            							<center>FORM EDIT ADMIN B'SMART</center>
            							<br>
            						</h2>
            					</div>

            					<div class="body">
            						<?php $attributes = array('method' => 'post'); ?>

            						<?php echo form_open('admin/siswa/edit_siswa/' . $detail['id_user'], $attributes); ?>
            						<!-- <form action="#" method="post" enctype="multipart/form-data"> -->
            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Nama</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="text" value="<?= $detail['nama'] ?>" class="form-control" placeholder="Ex : MTKPG2020" name="nama" required autocomplete="off" />
            									</div>
            								</div>
            							</div>
            						</div>


            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Username</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="text" value="<?= $detail['username'] ?>" class="form-control" placeholder="Ex: blablacrocxxx" required autocomplete="off" disabled />
            									</div>
            								</div>
            							</div>
            						</div>

            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Password</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="password" class="form-control" placeholder="Ex: xxxxx" name="password" required autocomplete="off" />
            									</div>
            								</div>
            							</div>
            						</div>

            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Confirm Password</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="password" class="form-control" placeholder="Ex: xxxxx" name="con_pass" required autocomplete="off" />
            									</div>
            								</div>
            							</div>
            						</div>

            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Email</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="text" value="<?= $detail['email'] ?>" class="form-control" placeholder="Ex: blablacrocxxx" name="email" required autocomplete="off" />
            									</div>
            								</div>
            							</div>
            						</div>
            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">No HP</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="text" value="<?= $detail['no_hp'] ?>" class="form-control" placeholder="Ex: blablacrocxxx" name="no_hp" required autocomplete="off" />
            									</div>
            								</div>
            							</div>
            						</div>

            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Jenis Kelamin</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">


            										<select name="jenis_kelamin" id="asd" class="form-control show-tick">
            											<option value="" selected="" disabled="">-- Pilih Jenis Kelamin --</option>
            											<?php foreach ($jenis_kelamin as $jenis) : ?>
            												<?php if ($detail['jenis_kelamin'] == $jenis['value']) : ?>
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
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Tempat Lahir</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="text" value="<?= $detail['tempat_lahir'] ?>" class="form-control" placeholder="Ex: blablacrocxxx" name="tempat_lahir" required autocomplete="off" />
            									</div>
            								</div>
            							</div>
            						</div>

            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Tanggal Lahir</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="text" value="<?= $detail['tanggal_lahir'] ?>" class="form-control datepicker" placeholder="Ex: blablacrocxxx" name="tanggal_lahir" required autocomplete="off" />
            									</div>
            								</div>
            							</div>
            						</div>

            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Umur</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input id="umur" type="number" value="<?= $detail['umur'] ?>" class="form-control" placeholder="Ex: blablacrocxxx" name="umur" required autocomplete="off" />
            									</div>
            								</div>
            							</div>
            						</div>

            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Pendidikan</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="text" value="<?= $detail['pendidikan'] ?>" class="form-control" placeholder="Ex: blablacrocxxx" name="pendidikan" required autocomplete="off" />
            									</div>
            								</div>
            							</div>
            						</div>

            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Alamat</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="text" value="<?= $detail['alamat'] ?>" class="form-control" placeholder="Ex: blablacrocxxx" name="alamat" required autocomplete="off" />
            									</div>
            								</div>
            							</div>
            						</div>



            						<div class="row clearfix">
            							<input type="submit" class="btn btn-primary pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 100px;" value="SIMPAN" name="edit_siswa">
            							<!-- <button class="btn btn-primary pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 100px;">SIMPAN</button> -->
            						</div>
            						</form>
            					</div>
            				</div>
            			</div>
            		</div>
            		<!-- #END# Input -->

            	</div>
            	</div>
            </section>

            <!-- Select Plugin Js -->
            <script src="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-select/js/bootstrap-select.js"></script>
