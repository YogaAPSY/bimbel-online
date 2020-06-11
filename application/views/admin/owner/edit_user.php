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
            							<center>FORM USER ADMIN B'SMART</center>
            							<br>
            						</h2>
            					</div>

            					<div class="body">
            						<?php $attributes = array('method' => 'post'); ?>

            						<?php echo form_open('admin/owner/edit_user/' . $detail['id_admin'], $attributes); ?>
            						<form action="#" method="post" enctype="multipart/form-data">
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
            											<input type="text" value="<?= $detail['username'] ?>" class="form-control" placeholder="Ex: blablacrocxxx" name="username" required autocomplete="off" />
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
            									<h4 style="font-size: 17.1px;">Status</h4>
            								</div>
            								<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            									<div class="form-group">
            										<div class="form-line">
            											<select style="font-size: 14px;" class="form-control show-tick" name="status" required autocomplete="off">
            												<option value="" selected disabled>-- Pilih Status --</option>
            												<option value="2">Owner</option>
            												<option value="1">Admin</option>
            											</select>
            										</div>
            									</div>
            								</div>
            							</div>

            							<div class="row clearfix">
            								<input type="submit" class="btn btn-primary pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 100px;" value="SIMPAN" name="edit_user">
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
