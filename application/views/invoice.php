<!DOCTYPE html>
<html>

<head>
	<title></title>

	<style type="text/css">
		.row {
			width: 100%;
			margin: 10px;
			display: inline-block;
		}

		.col-2,
		.col-6,
		.col-60,
		.col-40,
		.col-8 {
			float: left;
			padding-left: 8px;

		}

		.border table,
		th,
		td {
			border: 1px solid black;
			border-collapse: collapse;
		}

		th,
		td {
			padding: 5px;
			text-align: left;
		}

		.col-8 {
			width: 65%;
		}

		.col-6 {
			width: 48%;
		}

		.col-60 {
			width: 60%;
		}

		.col-40 {
			width: 36%;
		}

		.col-2 {
			width: 15%;
		}

		.mix {
			border: 1px dotted dashed solid double;
		}
	</style>

</head>

<body style="font-family:arial narrow;">

	<div class="margin-bottom" style="margin-top:10px;">
		<div class="row">
			<div class="col-2">
				<img src="assets/img/admin/palembang.png" width="80px" style="float:left;display: inline-block; margin-left:10px;">
			</div>
			<div class="col-8">
				<div style="text-align:center; float:right;display: inline-block; position:relative;">
					<h3 style="margin:0; font-size:17px;">BUKTI PEMBAYARAN SISWA B'SMART KOTA PALEMBANG<br>

					</h3>
					<p style="font-size:11px;">
						<div class="col-60" style="text-align:center">Daftar Penyaluran Barang Tanggal</div>
						<div class="col-40" style="text-align:center"><?= Tanggal(date('Y-m-d')) ?></div>
					</p>
				</div>
			</div>
			<div class="col-2">
				<img src="assets/img/admin/bnpb.png" width="80px" style="float:left;display: inline-block; margin-left:50px;">
			</div>
		</div>
	</div>

	<div class="isi" style="margin-top:20px;">
		<div class="border">
			<table class="border" style="margin-top:15px; width:100%">

				<tr>
					<th scope="col" style="border:1px solid; text-align:center;font-size:11px;">Nomor<br>urut</th>
					<th scope="col" style="border:1px solid;text-align:center;font-size:11px;">Timestamp</th>
					<th scope="col" style="border:1px solid;text-align:center;font-size:11px;">Hari</th>
					<th scope="col" style="border:1px solid;text-align:center;font-size:11px;">Tanggal</th>
					<th scope="col" style="border:1px solid;text-align:center;font-size:11px;">Nama<br>Barang</th>
					<th scope="col" style="border:1px solid;text-align:center;font-size:11px;">Deskripsi Barang</th>
					<th scope="col" style="border:1px solid;text-align:center;font-size:11px;">Jumlah<br>Barang</th>
					<th scope="col" style="border:1px solid;text-align:center;font-size:11px;">Satuan</th>
					<th scope="col" style="border:1px solid;text-align:center;font-size:11px;">NILAI (x Rp1000)</th>
					<th scope="col" style="border:1px solid;text-align:center;font-size:11px;">Nama Orang/Organisasi<br>Penerima</th>
					<th scope="col" style="border:1px solid;text-align:center;font-size:11px;">Alamat</th>
					<th scope="col" style="border:1px solid;text-align:center;font-size:11px;">Diserahkan Oleh</th>
					<th scope="col" style="border:1px solid;text-align:center;font-size:11px;">Tempat</th>
				</tr>
				
					<tr>
						<th style="border:1px solid;text-align:center;font-size:11px;"></th>
						<td style="border:1px solid;font-size:11px;"></td>
						<td style="border:1px solid;font-size:11px;">/td>
						<td style="border:1px solid;font-size:11px;"></td>
						<td style="border:1px solid;font-size:11px;"></td>
						<td style="border:1px solid;font-size:11px;"></td>
						<td style="border:1px solid;font-size:11px;"></td>
						<td style="border:1px solid;font-size:11px;"></td>
						<td style="border:1px solid;font-size:11px;"></td>
						<td style="border:1px solid;font-size:11px;"></td>
						<td style="border:1px solid;font-size:11px;">Palembang</td>
						<td style="border:1px solid;font-size:11px;"></td>
						<td style="border:1px solid;font-size:11px;"></td>
					</tr>
				
			</table>
		</div>

		<div class="pernyataan" style="margin-left:50px;margin-top:15px; margin-bottom:30px;">
			<div class="row">
				<div class="col-6" style="font-size:13px;">
					Mengetahui <br>
					Gugus Tugas Percepatan Penanganan COVID 19 <br>
					Sekretaris,<br><br><br><br><br>
					Ir. Agus Kelana, MT <br>
					Pembina Utama Muda <br>
					NIP. 196308151993081001
				</div>
				<div class="col-6" style="margin-left:200px;font-size:13px;">
					Palembang, 26 April 2020<br>
					Pengurus Barang,<br><br><br><br><br><br>
					A. Surakhman, S.Kom <br>
					NIP. 197803252000031002
				</div>
			</div>
		</div>
	</div>

</body>

</html>