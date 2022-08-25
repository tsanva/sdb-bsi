<?php
require '../controller/data_sewa_controller.php';

query();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Dashboard Petugas SDB</title>
	<link rel="stylesheet" type="text/css" href="../css/halaman_listpenyewa.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<div class="utama">

		<div class="sidebar-kiri">
			<div class="menu">
				<div style="padding: 2px; background-color: #1abc9c; ">
					<center><img src="../logo/fe904b026d.png"></center>
				</div>
				<ul>
					<!-- <li><a>Dashboard Petugas SDB</a> -->
					<li>
						<p>Log Nasabah</p>
						<ul>
							<li><a href="list_penyewa.php">Data Penyewa SDB</a></li>
							<li><a href="konfirmasi_bayar.php">Konfirmasi Penyewaan</a></li>
							<li><a href="#">List Penyewaan SDB</a></li>
						</ul>
					<li>
						<!-- <p>Laporan</p>
					</li>
					<ul>
						<li><a href="isi_laporan.php">Isi laporan</a></li>
						<li><a href="isi_kehilangan.php">Isi kehilangan</a></li>
					</ul>
					</li> -->
					<li><a href="../controller/logout_petugas.php">Keluar</a></li>
				</ul>
			</div>
		</div>

		<div class="sidebar-kanan">
			<div class="atas">
				<p> | Log Nasabah > List Penyewaan SDB </p>
			</div>
			<div class="tengah">
				<table class="table-field" style="text-align: center;" border="1">
					<form style="text-align: center;" action="data_sewa.php" method="get">
						<input style="background-color: rgba(224, 231, 255, .2); width: 20%; padding: 5.5px 15px; font-size: 15px; border: 1px solid rgba(46, 91, 255, 0.08);border-radius: 5px; " type="text" name="nopol" placeholder="Cari nopol">

						<input type="submit" class="submit-btn" value="Cari">
					</form>
					<tr>
						<th>No</th>
						<th>ID</th>
						<th>Nama Nasabah</th>
						<th>Biaya Sewa</th>
						<th>Tipe Loker</th>
						<th>Dokumen</th>
						<!-- <th>Aksi</th> -->
					</tr>
			<?php table(); ?>
				</table>

			</div>

		</div>
	</div>
</body>

</html>