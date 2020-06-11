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
					<h3 style="margin:0; font-size:20px;">BUKTI PEMBAYARAN SISWA B'SMART KOTA PALEMBANG<br>

					</h3>
					<br>
				</div>
			</div>
			<div class="col-2">
				<img src="assets/img/admin/bnpb.png" width="80px" style="float:left;display: inline-block; margin-left:50px;">
			</div>
		</div>
	</div>

	<div class="isi" style="margin-top:20px;">
		<p style="font-size:11px;">
			<div class="col-6" style="text-align:left">
				<table style="border: 1px solid white;
    border-collapse: collapse;">
					<tr>
						<td style="border:none">
							Nama : <?= $invoice['nama'] ?>
						</td>
					</tr>
					<tr>
						<td style="border: none;">
							Kode Kelas : <?= $invoice['kode_kelas'] ?>
						</td>
					</tr>
					<tr>
						<td style="border: none;">
							Nama Kelas : <?= $invoice['judul_kelas'] ?>
						</td>
					</tr>
					<tr>
						<td style="border: none;">
							Jadwal : <?= $invoice['jadwal_kelas'] ?>
						</td>
					</tr>
					<tr>
						<td style="border: none;">
							Jam : <?= $invoice['waktu_kelas'] ?>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-6" style="text-align:right">
				<table style="border: 1px solid white;
    border-collapse: collapse;">
					<tr>
						<td style="border:none">
							No. Pendaftaran : <?= $invoice['nomor_pendaftaran'] ?>
						</td>
					</tr>
					<tr>
						<td style="border:none">
							Tanggal Daftar : <?= $invoice['created_at'] ?>
						</td>

					</tr>

				</table>
			</div>
		</p>
		<div class="border">
			<table class="border" style="margin-top:15px; width:100%">

				<tr>
					<th scope="col" style="border:1px solid; text-align:center;font-size:14px;">No.<br></th>
					<!-- <th scope="col" style="border:1px solid;text-align:left;font-size:14px;">Kode Kelas</th>
					<th scope="col" style="border:1px solid;text-align:left;font-size:14px;">Nama Kelas</th> -->
					<th scope="col" style="border:1px solid;text-align:center;font-size:14px;" colspan="3">Keterangan</th>
					<th scope="col" style="border:1px solid;text-align:center;font-size:14px;">Biaya</th>
				</tr>

				<tr>
					<td style="border:1px solid;text-align:center;font-size:12px;width:20px;">1</td>
					<!-- <td style="border:1px solid;font-size:12px;">tes</td>
					<td style="border:1px solid;font-size:12px;">tes1</td> -->
					<td style="border:1px solid;font-size:12px;" colspan="3">Biaya Pendaftaran</td>
					<td style="border:1px solid;font-size:12px;text-align:center">Rp. <?= number_format($invoice['biaya_pendaftaran']) ?></td>
				</tr>
				<tr>
					<td style="border:1px solid;text-align:center;font-size:11px;width:20px;">2</td>
					<!-- <td style="border:1px solid;font-size:12px;">tes</td>
					<td style="border:1px solid;font-size:12px;">tes1</td> -->
					<td style="border:1px solid;font-size:12px;" colspan="3">Biaya Bulan Pertama</td>
					<td style="border:1px solid;font-size:12px;text-align:center">Rp. <?= number_format($invoice['harga_kelas']) ?></td>
				</tr>
				<!-- <tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr> -->
				<tr>
					<th style="border:1px solid;font-size:12px;text-align:center;" colspan="4">Total Pembayaran</th>

					<?php $jumlah = $invoice['biaya_pendaftaran'] + $invoice['harga_kelas']; ?>
					<td style="border:1px solid;font-size:12px;text-align:center">Rp. <?= number_format($jumlah) ?></d>
				</tr>

			</table>
		</div>

		<div class="pernyataan" style="margin-top:30px; margin-bottom:30px;">
			<div class="row">
				<div class="col-12" style="font-size:13px;">
					Catatan : <br>
					- Print bukti pembayaran ini lalu bawa ke bimbel B'Smart <br>
					- Uang yang sudah di bayarkan tidak dapat diminta kembali
				</div>
			</div>
		</div>
	</div>

</body>

</html>
