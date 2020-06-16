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

    						<?php if (isset($detail)) : ?>
    							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    									<center><img style="width:300px;height:250px;" src="<?= base_url(); ?>assets/<?= !empty($detail['foto']) ? 'upload/foto/' . $detail['foto'] : 'User/images/bg_2.jpg' ?>"></center>
    								</div>
    							</div>

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
    									<label style="font-size: 18px;font-weight: normal; padding-left: 0px;">Aktif</label>
    								</div>
    								<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    									<label class="pull-right" style="font-size: 18px;font-weight: normal; padding-left: 0px;">:</label>
    								</div>
    								<div class="col-xs-5 col-sm-5 col-md-9 col-lg-9">
    									<label style="font-size: 18px;font-weight: normal;padding-left: 0px;"><?= $detail['aktif'] ?></label>
    								</div>
    							</div>
    						<?php else : ?>
    							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    								<div class="col-xs-5 col-sm-5 col-md-2 col-lg-2">
    									<label style="font-size: 18px;font-weight: normal; padding-left: 0px;">Keterangan</label>
    								</div>
    								<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    									<label class="pull-right" style="font-size: 18px;font-weight: normal; padding-left: 0px;">:</label>
    								</div>
    								<div class="col-xs-5 col-sm-5 col-md-9 col-lg-9">
    									<label style="font-size: 18px;font-weight: normal;padding-left: 0px;">Siswa ini belum melengkapi Profile</label>
    								</div>
    							</div>

    						<?php endif; ?>

    						<div class="row clearfix">

    						</div>

    					</div>
    				</div>
    			</div>
    		</div>
    		<!-- #END# Input -->

    	</div>
    	</div>
    </section>
