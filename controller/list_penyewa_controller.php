<?php

function query()
{
  require '../controller/session_check_petugas.php';
  require '../model/list_penyewa_model.php';

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
  require '../model/list_penyewa_model.php';

  // cek anchor path
  $i = 1;

  getAllPenyewaan();
  foreach ($penyewaan as $row) :
    $row['ID_penyewaan'] = $rowIdPenyewaan;
    $row['username'] = $rowUsername;
    echo "<tr>
      <td>" . $i . "</td>
      <td>" . $rowIdPenyewaan . "</td>
      <td>" . $rowUsername . "</td>
      <td>
      <button class=\"submit-btn1\"><a href=\"../view/list_penyewa.php?idPenyewaan=" . $rowIdPenyewaan . "&aksi=masuk\">Masuk</a></button>
      <button class=\"submit-btn1\"><a href=\"../view/list_penyewa.php?idPenyewaan=" . $rowIdPenyewaan . "&aksi=keluar\">Keluar</a></button>
      </td>
      </tr>";
    $i++;
  endforeach;
  closeConn($conn);
}

function confirm()
{
  if (isset($_GET['idPenyewaan'])) {
    if (isset($_GET['aksi'])) {
      require '../controller/session_check_petugas.php';
      require '../model/list_penyewa_model.php';

      $username = $_SESSION['username'];
      $aksi = $_GET['aksi'];
      $idPenyewaan = $_GET['idPenyewaan'];

      getAllPenyewaan();
      setAktivitas();
      header("location:../view/list_penyewa.php");
    }
  }
}
