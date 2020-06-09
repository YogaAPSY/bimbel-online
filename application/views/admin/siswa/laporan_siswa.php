<section class="content">
	<div class="container-fluid">

		<!-- Exportable Table -->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2 style="font-size: 22px;color:#ad1455;font-weight: bold;">
							<center>FILTER SISWA BY DATE</center>
						</h2> <br><br>

					</div>
					<div class="body">


						<?php $attributes = array('id' => 'login_form', 'class' => 'login100-form validate-form', 'method' => 'post'); ?>

						<?php echo form_open('admin/siswa/filter_laporan', $attributes); ?>
						<input type="text" name="start">
						<input type="text" name="end">
						<input type="submit" name="submit">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- #END# Exportable Table -->
	</div>
</section>


<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2>B'SMART SISWA</h2>
		</div>
		<!-- Exportable Table -->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2 style="font-size: 22px;color:#ad1455;font-weight: bold;">
							<center>LAPORAN SISWA</center>
						</h2> <br><br>

					</div>
					<div class="body">

						<div class="table-responsive">

							<table class="table table-bordered table-striped table-hover dataTable js-exportable">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Siswa</th>
										<th>Kode Kelas</th>
										<th>Status Pembayaran</th>
										<th>Status Siswa</th>
										<th>Tanggal Aktif</th>
									</tr>
								</thead>

								<tbody>
									<?php $i = 1;
									foreach ($list_laporan as $laporan) : ?>
										<tr>
											<td><?= $i; ?></td>
											<td><?= $laporan['nama'] ?></td>
											<td><?= get_kode_kelas($laporan['id_kelas']) ?></td>
											<td><?php
												echo ($laporan['status_pembayaran'] == 1) ? 'Berhasil' : (($laporan['status_pembayaran'] == 2) ? 'Menunggu Persetujuan' : 'Belum Bayar'); ?></td>
											<td><?php
												echo ($laporan['status'] == 1) ? 'Aktif' : 'Tidak Aktif'; ?></td>
											<td><?= $laporan['created_at'] ?></td>
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
		<!-- #END# Exportable Table -->
	</div>
</section>
