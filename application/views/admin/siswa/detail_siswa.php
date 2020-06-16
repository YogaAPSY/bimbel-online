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
    			height: 250px !important;
    			min-width: 290px !important;
    			max-width: 290px !important;
    		}
    	}
    </style>
    <section class="content">
    	<div class="container-fluid">
    		<div class="block-header">
    			<h2>B'SMART SISWA</h2>
    		</div>

    		<!-- Input -->
    		<div class="row clearfix">
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<div class="card">
    					<div class="header">
    						<h2 style="font-weight: bold;color: #ad1455;font-size: 22px;">
    							<center>DETAIL SISWA</center>
    							<br>
    						</h2>
    					</div>
    					<div class="body">


    						<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    								<center><img style="width:300px;height:250px;" src="<?= base_url(); ?>assets/User/images/bg_2.jpg"></center>
    							</div>
    						</div> -->

    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="col-xs-5 col-sm-5 col-md-2 col-lg-2">
    								<label style="font-size: 18px;font-weight: normal; padding-left: 0px;">Nama</label>
    							</div>
    							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    								<label class="pull-right" style="font-size: 18px;font-weight: normal; padding-left: 0px;">:</label>
    							</div>
    							<div class="col-xs-5 col-sm-5 col-md-9 col-lg-9">
    								<label style="font-size: 18px;font-weight: normal;padding-left: 0px;"><?= $detail['nama'] ?></label>
    							</div>
    						</div>

    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="col-xs-5 col-sm-5 col-md-2 col-lg-2">
    								<label style="font-size: 18px;font-weight: normal; padding-left: 0px;">Nomor HP</label>
    							</div>
    							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    								<label class="pull-right" style="font-size: 18px;font-weight: normal; padding-left: 0px;">:</label>
    							</div>
    							<div class="col-xs-5 col-sm-5 col-md-9 col-lg-9">
    								<label style="font-size: 18px;font-weight: normal;padding-left: 0px;"><?= $detail['no_hp'] ?></label>
    							</div>
    						</div>
    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="col-xs-5 col-sm-5 col-md-2 col-lg-2">
    								<label style="font-size: 18px;font-weight: normal; padding-left: 0px;">Tempat / Tanggal Lahir</label>
    							</div>
    							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    								<label class="pull-right" style="font-size: 18px;font-weight: normal; padding-left: 0px;">:</label>
    							</div>
    							<div class="col-xs-5 col-sm-5 col-md-9 col-lg-9">
    								<label style="font-size: 18px;font-weight: normal;padding-left: 0px;"><?= $detail['tempat_lahir'] . "/" . $detail['tanggal_lahir'] ?></label>
    							</div>
    						</div>

    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="col-xs-5 col-sm-5 col-md-2 col-lg-2">
    								<label style="font-size: 18px;font-weight: normal; padding-left: 0px;">Umur</label>
    							</div>
    							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    								<label class="pull-right" style="font-size: 18px;font-weight: normal; padding-left: 0px;">:</label>
    							</div>
    							<div class="col-xs-5 col-sm-5 col-md-9 col-lg-9">
    								<label style="font-size: 18px;font-weight: normal;padding-left: 0px;"><?= $detail['umur'] ?></label>
    							</div>
    						</div>

    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="col-xs-5 col-sm-5 col-md-2 col-lg-2">
    								<label style="font-size: 18px;font-weight: normal; padding-left: 0px;">Jenis Kelamin</label>
    							</div>
    							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    								<label class="pull-right" style="font-size: 18px;font-weight: normal; padding-left: 0px;">:</label>
    							</div>
    							<div class="col-xs-5 col-sm-5 col-md-9 col-lg-9">
    								<label style="font-size: 18px;font-weight: normal;padding-left: 0px;"><?= get_nama_jenis_kelamin($detail['jenis_kelamin']) ?></label>
    							</div>
    						</div>
    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="col-xs-5 col-sm-5 col-md-2 col-lg-2">
    								<label style="font-size: 18px;font-weight: normal; padding-left: 0px;">Pendidikan</label>
    							</div>
    							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    								<label class="pull-right" style="font-size: 18px;font-weight: normal; padding-left: 0px;">:</label>
    							</div>
    							<div class="col-xs-5 col-sm-5 col-md-9 col-lg-9">
    								<label style="font-size: 18px;font-weight: normal;padding-left: 0px;"><?= $detail['pendidikan'] ?></label>
    							</div>
    						</div>

    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="col-xs-5 col-sm-5 col-md-2 col-lg-2">
    								<label style="font-size: 18px;font-weight: normal; padding-left: 0px;">Alamat</label>
    							</div>
    							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    								<label class="pull-right" style="font-size: 18px;font-weight: normal; padding-left: 0px;">:</label>
    							</div>
    							<div class="col-xs-5 col-sm-5 col-md-9 col-lg-9">
    								<label style="font-size: 18px;font-weight: normal;padding-left: 0px;"><?= $detail['alamat'] ?></label>
    							</div>
    						</div>

    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="col-xs-5 col-sm-5 col-md-2 col-lg-2">
    								<label style="font-size: 18px;font-weight: normal; padding-left: 0px;">Kelas</label>
    							</div>
    							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    								<label class="pull-right" style="font-size: 18px;font-weight: normal; padding-left: 0px;">:</label>
    							</div>
    							<div class="col-xs-5 col-sm-5 col-md-9 col-lg-9">
    								<label style="font-size: 18px;font-weight: normal;padding-left: 0px;"><?= get_nama_kelas($detail['id_kelas']) ?></label>
    							</div>
    						</div>

    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="col-xs-5 col-sm-5 col-md-2 col-lg-2">
    								<label style="font-size: 18px;font-weight: normal; padding-left: 0px;">Status</label>
    							</div>
    							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    								<label class="pull-right" style="font-size: 18px;font-weight: normal; padding-left: 0px;">:</label>
    							</div>
    							<div class="col-xs-5 col-sm-5 col-md-9 col-lg-9">
    								<label style="font-size: 18px;font-weight: normal;padding-left: 0px;"><?php
																											echo ($detail['status'] == 1) ? 'Aktif' : 'Tidak Aktif'; ?></label>
    							</div>
    						</div>

    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="col-xs-5 col-sm-5 col-md-2 col-lg-2">
    								<label style="font-size: 18px;font-weight: normal; padding-left: 0px;">Pembayaran</label>
    							</div>
    							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    								<label class="pull-right" style="font-size: 18px;font-weight: normal; padding-left: 0px;">:</label>
    							</div>
    							<div class="col-xs-5 col-sm-5 col-md-9 col-lg-9">
    								<label style="font-size: 18px;font-weight: normal;padding-left: 0px;"><?php
																											echo ($detail['status_pembayaran'] == 1) ? 'Berhasil' : (($detail['status_pembayaran'] == 2) ? 'Menunggu Persetujuan' : 'Belum Bayar'); ?></label>
    							</div>
    						</div>

    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="col-xs-5 col-sm-5 col-md-2 col-lg-2">
    								<label style="font-size: 18px;font-weight: normal; padding-left: 0px;">Pembayaran</label>
    							</div>
    							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    								<label class="pull-right" style="font-size: 18px;font-weight: normal; padding-left: 0px;">:</label>
    							</div>
    							<div class="col-xs-5 col-sm-5 col-md-9 col-lg-9">
    								<label style="font-size: 18px;font-weight: normal;padding-left: 0px;">
    									<?php if (($detail['bukti_pembayaran']) != '') : ?>
    										<a href="#" data-toggle="modal" data-target="#myModalfoto"><label style="font-size: 18px;font-weight: normal;padding-left: 0px;">

    												<img src="<?= isset($detail['bukti_pembayaran']) ? base_url('assets/upload/bukti_pembayaran/') . $detail['bukti_pembayaran'] : '#'; ?>" alt="" height="100px" width="100px">

    										</a>
    									<?php else : ?>
    										<span style="color: red;">Pendaftar belum mengupload bukti pendaftaran</span>
    									<?php endif; ?></label>
    							</div>
    						</div>
    						<div class="row clearfix">
    							<?php if ($detail['status_pembayaran'] == '2') : ?>
    								<a class="btn btn-primary pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 200px;" href="<?= base_url('admin/siswa/konfirmasi/' . $detail['id_pendaftaran']); ?>">Konfirmasi Pembayaran</a>
    							<?php elseif ($detail['status_pembayaran'] == '1') : ?>
    								<!-- <input type="submit" name="tambah" class="btn btn-primary pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 200px;" value="Konfirmasi Pembayaran"> -->
    								<button type="submit" name="tambah" class="btn btn-danger pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 300px;" disabled>Pembayaran Sudah di Konfirmasi</button>
    							<?php else : ?>
    								<button type="submit" name="tambah" class="btn btn-warning pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 300px;" disabled>Menunggu upload bukti transfer</button>
    							<?php endif; ?>
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
    <!-- The Modal Foto-->
    <div class="modal fade" id="myModalfoto">
    	<div class="modal-dialog modal-dialog-centered">
    		<div class="modal-content" style="border: 0px solid rgba(0, 0, 0, 0.2);">

    			<!-- Modal Header -->
    			<div class="modal-header" style="background-color: #4f575f;">
    				<center><img src="<?= isset($detail['bukti_pembayaran']) ? base_url('assets/upload/bukti_pembayaran/') . $detail['bukti_pembayaran'] : '#'; ?>" alt="" class="hp" style="min-width:500px;min-height:300px;max-width:500px;max-height:300px;"></center>
    				<br>
    			</div>

    			</form>
    		</div>
    	</div>
    </div>
