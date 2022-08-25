// wip
<?php
  function getPenyewaanByUsername($username) 
  {
    require '../model/db_connection.php';
    require '../controller/session_check_petugas.php';

    openConn();
    $penyewaan = queryTable("SELECT * FROM penyewaan WHERE status_bayar IS TRUE AND username LIKE '%" . $username . "%'");
  }

  function getAllPenyewaan()
  {
    require '../model/db_connection.php';
    require '../controller/session_check_petugas.php';

    openConn();
    $penyewaan = queryTable("SELECT * FROM penyewaan WHERE status_bayar IS TRUE");
  }