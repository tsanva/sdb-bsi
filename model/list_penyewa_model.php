<?php
function getPenyewaanByUsername($username)
{
  require '../controller/session_check_petugas.php';
  require '../controller/query_table.php';

  openConn();
  $penyewaan = queryTable("SELECT * FROM penyewaan WHERE status_bayar IS NULL AND username LIKE '%" . $username . "%'");
}

function getAllPenyewaan()
{
  require '../controller/session_check_petugas.php';
  require '../controller/query_table.php';

  openConn();
  $penyewaan = queryTable("SELECT * FROM penyewaan WHERE status_bayar IS NULL");
}

function setAktivitas()
{
  require '../controller/session_check_petugas.php';
  require '../model/db_connection.php';

  openConn();
  mysqli_query($conn, "INSERT INTO aktifitas SET username = $username, tipe = $aksi");
}
