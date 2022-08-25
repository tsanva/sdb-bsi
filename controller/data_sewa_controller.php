<?php
function query()
{
  require '../controller/session_check_petugas.php';
  require '../model/data_sewa_model.php';

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
  require '../model/data_sewa_model.php';

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
      <td>" . $rowBiayaSewa . "</td>
      <td>" . $rowTipe . "</td>
      <!-- dokumen belom --> 
      <td>dokumen</td>
      </tr>";
    $i++;
  endforeach;
  closeConn($conn);
}
