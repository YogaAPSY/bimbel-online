            <!-- Bootstrap Select Css -->
            <link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

            <section class="content">
            	<div class="container-fluid">
            		<div class="block-header">
            			<h2>B'SMART RUANG KELAS</h2>
            		</div>

            		<!-- Input -->
            		<div class="row clearfix">
            			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            				<div class="card">
            					<div class="header">
            						<h2 style="font-weight: bold;color: #ad1455;font-size: 22px;">
            							<center>FORM RUANG KELAS</center>
            							<br>
            						</h2>
            					</div>

            					<div class="body">
            						<?php $attributes = array('method' => 'post'); ?>

            						<?php echo form_open('admin/kelas/add_kelas', $attributes); ?>
            						<form action="#" method="post" enctype="multipart/form-data">
            							<div class="row clearfix">
            								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            									<h4 style="font-size: 17.1px;">Kode Kelas</h4>
            								</div>
            								<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            									<div class="form-group">
            										<div class="form-line">
            											<input type="text" class="form-control" placeholder="Ex : MTKPG2020" name="kode_kelas" required autocomplete="off" />
            										</div>
            									</div>
            								</div>
            							</div>


            							<div class="row clearfix">
            								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            									<h4 style="font-size: 17.1px;">Jadwal Kelas</h4>
            								</div>
            								<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            									<div class="form-group">
            										<div class="form-line">
            											<input type="text" class="form-control" placeholder="Senin, Rabu, Jumat / Senin - Jumat" name="jadwal_kelas" required autocomplete="off" />
            										</div>
            									</div>
            								</div>
            							</div>

            							<div class="row clearfix">
            								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            									<h4 style="font-size: 17.1px;">Judul Kelas</h4>
            								</div>
            								<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            									<div class="form-group">
            										<div class="form-line">
            											<input type="text" class="form-control" placeholder="Cinta Matika Pagi" name="judul_kelas" required autocomplete="off" />
            										</div>
            									</div>
            								</div>
            							</div>

            							<div class="row clearfix">
            								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            									<h4 style="font-size: 17.1px;">Harga Perbulan</h4>
            								</div>
            								<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            									<div class="form-group">
            										<div class="form-line">
            											<input type="text" class="form-control" placeholder="250.000" name="harga_kelas" required autocomplete="off" />
            										</div>
            									</div>
            								</div>
            							</div>

            							<div class="row clearfix">
            								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            									<h4 style="font-size: 17.1px;">Waktu Kelas</h4>
            								</div>
            								<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            									<div class="form-group">
            										<div class="form-line">
            											<input type="text" class="form-control" placeholder="09:00 - 11:30" name="waktu_kelas" required autocomplete="off" />
            										</div>
            									</div>
            								</div>
            							</div>

            							<div class="row clearfix">
            								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            									<h4 style="font-size: 17.1px;">Deskripsi Kelas</h4>
            								</div>
            								<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            									<div class="form-group">
            										<div class="form-line">
            											<textarea id="ckeditor" class="form-control" name="deskripsi_kelas" required autocomplete="off" /></textarea>
            										</div>
            									</div>
            								</div>
            							</div>

            							<div class="row clearfix">
            								<input type="submit" class="btn btn-primary pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 100px;" value="SIMPAN" name="add_kelas">
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
