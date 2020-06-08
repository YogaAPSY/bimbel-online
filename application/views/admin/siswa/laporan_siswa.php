<!-- 
<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2>B'SMART SISWA</h2>
		</div>
      <h4 class="head3" style="display: inline-block;">Export Data (Excel) :
        <br> <small>Pilih Filer</small> </h4>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalPendidikan">
        Pendidikan
      </button>

      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalUsia">
        Usia
      </button>

      <a href="<?php echo base_url('xx_secret/users/export_all'); ?>" class="btn btn-primary">Seluruh</a>
      <hr style="margin:5px 0px;" />


    </div>
  </section> -->

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
									<tr>
										<td>1</td>
										<td>Mikel</td>
										<td>tdr3000</td>
										<td>berhasil</td>
										<td>aktif</td>
										<td>12/06/2020</td>
									</tr>
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
