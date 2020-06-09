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
    			<h2>B'SMART RUANG KELAS</h2>
    		</div>

    		<!-- Basic Examples -->
    		<div class="row clearfix">
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<div class="card">
    					<div class="header">
    						<h2 style="font-size: 22px;color:#ad1455;font-weight: bold;">
    							<center>LIST RUANG KELAS</center>
    						</h2> <br><br>
    						<a href="<?= base_url(); ?>admin/kelas/add_kelas">
    							<button type="button" class="btn btn-info waves-effect">
    								<i class="material-icons">add</i>
    								<span>TAMBAH</span>
    							</button>
    						</a>
    					</div>

    					<div class="body">
    						<div class="table-responsive">
    							<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
    								<thead>
    									<tr>
    										<th>No</th>
    										<th>Kode</th>
    										<th>Judul</th>
    										<th>Jadwal</th>

    										<th>Harga</th>
    										<th>Jumlah</th>
    										<th>Deskripsi</th>
    										<th style="text-align: center;">ACTION</th>
    									</tr>
    								</thead>

    								<tbody>

    									<?php $i = 1;
										foreach ($list_kelas as $kelas) : ?>
    										<tr>
    											<td><?= $i++; ?></td>
    											<td><?= $kelas['kode_kelas'] ?></td>
    											<td><?= $kelas['judul_kelas'] ?></td>
    											<td><?= $kelas['jadwal_kelas'] ?></td>

    											<td><?= $kelas['harga_kelas'] ?></td>
    											<td><?= get_total_siswa($kelas['id_kelas']) ?></td>
    											<td><?= $kelas['deskripsi_kelas'] ?></td>
    											<td style="text-align: center;vertical-align: middle;">
    												<center>
    													<a href="<?= base_url(); ?>admin/kelas/kelas_siswa/<?= $kelas['id_kelas']; ?>" data-toggle="tooltip" data-placement="top" title="View"><i style="color:#00b0e4;" class="material-icons">visibility</i></a>&nbsp;
    													<a href="<?= base_url(); ?>admin/kelas/edit_kelas/<?= $kelas['id_kelas']; ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i style="color:#00b0e4;" class="material-icons">description</i></a>&nbsp;
    													<a href="#" data-toggle="tooltip" data-placement="top" title="Delete" onclick="javasciprt: return confirm('Yakin Ingin Menghapus ?')"><i style="color:red;" class="material-icons">delete</i></a>
    												</center>
    											</td>
    										</tr>
    									<?php endforeach; ?>

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
