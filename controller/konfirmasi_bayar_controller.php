// wip
<?php

function query()
{
  require '../controller/session_check_petugas.php';
  require '../model/konfirmasi_bayar_model.php';

  if (isset($_GET['username'])) {
    $username = $_GET['username'];
    getPenyewaanByUsername($username);
  } else {
    getAllPenyewaan();
  }
}

function table()
{
  require '../controller/session_check_petugas.php';
  require '../model/konfirmasi_bayar_model.php';

  // cek anchor path
  $i = 1;

  getAllPenyewaan();
  foreach ($penyewaan as $row) :
    $row['ID_penyewaan'] = $rowIdPenyewaan;
    $row['username'] = $rowUsername;
    $row['tipe'] = $rowTipe;
    $row['waktu_sewa'] = $rowWaktuSewa;
    $row['biaya_sewa'] = $rowBiayaSewa;
    echo "<tr>
      <td>" . $i . "</td>
      <td>" . $rowIdPenyewaan . "</td>
      <td>" . $rowUsername . "</td>
      <td>" . $rowTipe . "</td>
      <td>" . $rowWaktuSewa . "</td>
      <td>" . $rowBiayaSewa . "</td>
      <td>
      <button class=\"submit-btn1\"><a href=\"../view/konfirmasi_bayar.php?idPenyewaan=" . $rowIdPenyewaan . "\">Konfirmasi</a></button>
      </td>
      </tr>";
    $i++;
  endforeach;
  closeConn($conn);
}

function confirm()
{
  if (isset($_GET['idPenyewaan'])) {
    require '../controller/session_check_petugas.php';
    require '../model/konfirmasi_bayar_model.php';

    $username = $_SESSION['username'];
    $idPenyewaan = $_GET['idPenyewaan'];

    getAllPenyewaan();
    mysqli_query($conn, "UPDATE penyewaan SET status_bayar = true WHERE ID_penyewaan = $idPenyewaan");
    mysqli_query($conn, "UPDATE nasabah SET status_sewa = true WHERE username = $username");
    header("location:konfirmasi_bayar.php");
  }
}
