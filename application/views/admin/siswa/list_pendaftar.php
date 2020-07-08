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

    		<!-- Basic Examples -->
    		<div class="row clearfix">
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<div class="card">
    					<div class="header">
    						<h2 style="font-size: 22px;color:#ad1455;font-weight: bold;">

    							<center>LIST <?= (isset($nama_kelas)) ? " SISWA " . $nama_kelas : "PENDAFTAR"; ?></center>
    						</h2> <br><br>
    					</div>

    					<div class="body">
    						<div class="table-responsive">
    							<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
    								<thead>
    									<tr>
    										<th>No</th>
    										<th>Nama</th>
    										<th>Nomor HP</th>
    										<th>Kelas</th>
    										<th>Status</th>
    										<th>Pembayaran</th>
    										<!-- <th>Bukti Pembayaran</th> -->
    										<?php if ($this->session->userdata('status') == 1) : ?>
    											<th style="text-align: center;">Action</th>
    										<?php endif; ?>
    									</tr>
    								</thead>

    								<tbody>
    									<?php $i = 1;
										foreach ($list_siswa as $siswa) : ?>
    										<tr>
    											<td><?= $i; ?></td>
    											<td><?= $siswa['nama']; ?></td>
    											<td><?= $siswa['no_hp']; ?></td>
    											<td><?= get_nama_kelas($siswa['id_kelas']); ?></td>
    											<td style="text-align: center;">
    												<?php if ($this->session->userdata('status') == 1) : ?>
    													<?php if ($siswa['status'] == 1) : ?>
    														<a href="<?= base_url('admin/siswa/make_inactive/' . $siswa['id_pendaftaran']) ?>"><span class="btn btn-primary">Active</span></a>
    													<?php elseif ($siswa['status'] == 2 && $siswa['status_pembayaran'] == 1) : ?>
    														<a href="<?= base_url('admin/siswa/make_active/' . $siswa['id_pendaftaran']) ?>"><span class="btn btn-danger">Inactive</span></a>
    													<?php else : ?>
    														<span class="btn btn-danger">Inactive</span>
    													<?php endif; ?>
    												<?php else : ?>
    													<?php if ($siswa['status'] == 1) : ?>
    														<span class="btn btn-primary">Active</span>
    													<?php else : ?>
    														<span class="btn btn-danger">Inactive</span>
    													<?php endif; ?>
    												<?php endif; ?>
    											</td>
    											<td><?php
													echo ($siswa['status_pembayaran'] == 1) ? 'Berhasil' : (($siswa['status_pembayaran'] == 2) ? 'Menunggu Persetujuan' : 'Belum Bayar'); ?></td>
    											<!-- <td>
    												image/image.jpg
    											</td> -->
    											<?php if ($this->session->userdata('status') == 1) : ?>
    												<td style="text-align: center;vertical-align: middle;">
    													<center>
    														<a href="<?= base_url('admin/siswa/detail/') . $siswa['id_pendaftaran'] ?>" data-toggle="tooltip" data-placement="top" title="View"><i style="color:#00b0e4;" class="material-icons">visibility</i></a>&nbsp;

    														<a href="#" id="btn_posisi2" title="Delete" data-id="<?= $siswa['id_pendaftaran'] ?>" data-toggle="modal" data-target="#deleteModal"><i style="color:red;" class="material-icons">delete</i></a>
    													</center>
    												</td>
    											<?php endif; ?>
    										</tr>
    									<?php $i++;
										endforeach; ?>
    								</tbody>
    							</table>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>

    		<!-- #END# Basic Examples -->
    	</div>
    	</div>
    </section>

    <!-- Logout Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
    				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">×</span>
    				</button>
    			</div>
    			<div class="modal-body">Apakah anda yakin ingin menghapus pendaftar ini ?</div>
    			<div class="modal-footer">
    				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    				<a id="hapus_nyo" class="btn btn-primary" href="#">Delete</a>
    			</div>
    		</div>
    	</div>
    </div>
