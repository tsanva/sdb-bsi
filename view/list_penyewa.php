
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
				<center><img src="../logo/fe904b026d.png"></center></div>
				<ul>
					<!-- <li><a href="#">Dashboard Petugas SDB</a> -->
					<li>
						<p>Log Nasabah</p>
						<ul>
							<li><a href="#">Data Penyewa SDB</a></li>
							<li><a href="konfirmasi_bayar.php">Konfirmasi Pembayaran</a></li>
							<li><a href="data_sewa.php">List Penyewaan SDB</a></li>
						</ul>
					<li>
						<!-- <p>Laporan</p>
					</li>
					<ul>
						<li><a href="isi_laporan.php">Isi laporan</a></li>
						<li><a href="isi_kehilangan.php">Isi kehilangan</a></li>
					</ul>
					</li> -->
					<li><a href="logoutpetugas.php">Keluar</a></li>
				</ul>
			</div>
		</div>

		<div class="sidebar-kanan">
			<div class="atas">
				<p> | Log Nasabah > Data Penyewa SDB </p>
			</div>

			<div class="tengah">
				 <table style="text-align: center;" border="1">
                        <tr>
                            <th>No</th>
                            <th>Nama Nasabah</th>
                            <th>Aksi</th>
                        </tr>

                        <?php $i = 1; ?>
                        <!-- mengambil setiap nilai array -->
                        <?php foreach ($tidy_id as $row) : ?>
                            <tr>
                                <!-- membuat nomor auto incremen -->
                                <td><?php echo $i;  ?></td>

                                <td><?php echo $row['waktu']; ?></td>
                                <td><?php echo $row['barang']; ?></td>
                                <td><?php echo $row['lokasi_pengambilan']; ?></td>
                                <td><?php echo $row['keterangan']; ?></td>
                                <td><?php echo $row['nip_petugas']; ?></td>
                                <td><?php echo $row['id_kehilangan']; ?></td>
                                <td>
                                    <button class="submit-btn1"><a href="hapus_kehilangan.php?idkehilangan=<?php echo $row['id_kehilangan']; ?>">Masuk</a>
                                    </button>
									<button class="submit-btn1"><a href="hapus_kehilangan.php?idkehilangan=<?php echo $row['id_kehilangan']; ?>">Keluar</a>
                                    </button>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach;  ?>
        
                     </table>				
			</div>
		</div>
</body>

</html>