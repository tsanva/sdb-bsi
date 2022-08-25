<?php
require '../controller/konfirmasi_bayar_controller.php';

query();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konfirmasi Bayar</title>
  <link rel="stylesheet" type="text/css" href="../css/data_kendaraan1.css">
</head>

<body>
  <div class="utama">

    <div class="sidebar-kiri">
      <div class="menu">
        <div style="padding: 2px; background-color: #1abc9c; ">
          <center><img src="../logo/logokecil.svg"></center>
        </div>
        <ul>
          <li><a href="dashboard_petugas.php">Dashboard</a>
          <li>
            <p>Log Parkir</p>
            <ul>
              <li><a href="data_kendaraan.php">Data Kendaraan Parkir</a></li>
              <li><a href="kalkulasi_kendaraan.php">Kalkulasi Kendaraan</a></li>
            </ul>
          <li>
            <p>Laporan</p>
          </li>
          <ul>
            <li><a href="isi_laporan.php">Isi laporan</a></li>
            <li><a href="isi_kehilangan.php">Isi kehilangan</a></li>
          </ul>
          </li>
          <li><a href="logoutpetugas.php">Keluar</a></li>
        </ul>
      </div>
    </div>

    <div class="sidebar-kanan">
      <div class="atas">
        <p> | Log parkir > Data Kendaraan Parkir </p>
      </div>
      <div class="tengah">
        <table class="table-field" style="text-align: center;" border="1">
          <form style="text-align: center;" action="konfirmasi_bayar_controller.php" method="get">
            <input style="background-color: rgba(224, 231, 255, .2); width: 20%; padding: 5.5px 15px; font-size: 15px; border: 1px solid rgba(46, 91, 255, 0.08);border-radius: 5px; " type="text" name="username" placeholder="Cari nasabah">

            <input type="submit" class="submit-btn" value="Cari">
          </form>
          <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Nasabah</th>
            <th>Tipe Loker</th>
            <th>Waktu Sewa</th>
            <th>Biaya Sewa</th>
            <th>Aksi</th>
          </tr>
<!-- funct below here -->
          <?php table()  ?>
        </table>

      </div>

    </div>
  </div>

</body>

</html>