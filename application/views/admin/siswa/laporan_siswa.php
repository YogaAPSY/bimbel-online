<!-- Bootstrap DatePicker Css -->
<link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" />
<style>
	.datepicker.datepicker-dropdown.dropdown-menu {
		margin-top: 111px !important;
	}
</style>
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
						<h2 style="font-size: 24px;color:#ad1455;font-weight: bold;">
							<center>FILTER SISWA BY DATE</center>
						</h2>

					</div>
					<div class="body">
						<?php $attributes = array('id' => 'login_form', 'class' => 'login100-form validate-form', 'method' => 'post'); ?>
						<?php echo form_open('admin/siswa/filter_laporan', $attributes); ?>
						<div class="row clearfix">
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="input-group date datepicker">
									<div class="form-line ">
										<input type="text" name="start" class="form-control">
									</div>
									<span class="input-group-addon">
										<i class="material-icons">date_range</i>
									</span>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="input-group date datepicker">
									<div class="form-line">
										<input type="text" name="end" class="form-control">
									</div>
									<span class="input-group-addon">
										<i class="material-icons">date_range</i>
									</span>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<input type="submit" name="submit" class="btn btn-success">
							</div>

						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- #END# Exportable Table -->
		<!-- Exportable Table -->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2 style="font-size: 22px;color:#ad1455;font-weight: bold;">
							LAPORAN SISWA
						</h2> <br>

					</div>
					<div class="body">

						<div class="table-responsive">

							<table class="table table-bordered table-striped table-hover" id="lapor">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Siswa</th>
										<th>Kode Kelas</th>
										<th>Status Pembayaran</th>
										<th>Status Siswa</th>
										<th>Tanggal Aktif</th>
										<th>Total Bayar</th>
									</tr>
								</thead>

								<tbody>
									<?php $i = 1;
									$jumlah = 0;
									$total = 0;
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
											<?php $jumlah = $laporan['total_kelas'] + $laporan['total_biaya'] ?>
											<td>Rp. <?= number_format($jumlah) ?></td>

										</tr>
									<?php $i++;
										$total = $jumlah + $total;
									endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td>Total Pendapatan</td>
										<td></td>
										<td></td>

										<td>Rp. <?= number_format($total); ?></td>
									</tr>

								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- #END# Exportable Table -->
	</div>
</section>
