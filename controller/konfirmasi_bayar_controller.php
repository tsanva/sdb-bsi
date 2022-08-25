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

  $i = 1;
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
      <button class=\"submit-btn1\"><a href=\"checkout.php?idriwayat=" . $rowIdPenyewaan . "\">Check Out</a></button>
      </td>
      </tr>";
    $i++;
  endforeach;
  closeConn($conn);
}
