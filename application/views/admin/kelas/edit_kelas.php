

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
            							<center>EDIT RUANG KELAS</center>
            							<br>
            						</h2>
            					</div>

            					<div class="body">
            						<?php $attributes = array('method' => 'post'); ?>

            						<?php echo form_open("admin/kelas/edit_kelas/" . $kelas['id_kelas'], $attributes); ?>
            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Kode Kelas</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="text" class="form-control" placeholder="Ex : MTKPG2020" name="kode_kelas" value="<?= $kelas['kode_kelas'] ?>" required autocomplete="off" />
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
            										<input type="text" class="form-control" placeholder="Senin, Rabu, Jumat / Senin - Jumat" value="<?= $kelas['jadwal_kelas'] ?>" name="jadwal_kelas" required autocomplete="off" />
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
            										<input type="text" class="form-control" placeholder="Cinta Matika Pagi" value="<?= $kelas['judul_kelas'] ?>" name="judul_kelas" required autocomplete="off" />
            									</div>
            								</div>
            							</div>
            						</div>
            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Biaya Pendaftaran</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="text" value="<?= $kelas['biaya_pendaftaran'] ?>" class="form-control" placeholder="250000" name="biaya_pendaftaran" required autocomplete="off" />
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
            										<input type="text" class="form-control" placeholder="250.000" value="<?= $kelas['harga_kelas'] ?>" name="harga_kelas" required autocomplete="off" />
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
            										<input type="text" class="form-control" placeholder="09:00 - 11:30" name="waktu_kelas" required autocomplete="off" value="<?= $kelas['waktu_kelas'] ?>" />
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
            										<textarea id="ckeditor" class="form-control" name="deskripsi_kelas" required autocomplete="off" /> <?= $kelas['deskripsi_kelas'] ?></textarea>
            									</div>
            								</div>
            							</div>
            						</div>

            						<div class="row clearfix">
            							<input type="submit" class="btn btn-primary pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 100px;" value="SIMPAN" name="edit_kelas">
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


