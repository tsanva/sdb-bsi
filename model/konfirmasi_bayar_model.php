// wip
<?php
  function getPenyewaanByUsername($username) 
  {
    require '../controller/session_check_petugas.php';
    require '../controller/query_table.php';

    $penyewaan = queryTable("SELECT * FROM penyewaan WHERE status_bayar IS TRUE AND username LIKE '%" . $username . "%'");
  }

  function getAllPenyewaan()
  {
    require '../controller/session_check_petugas.php';
    require '../controller/query_table.php';

    $penyewaan = queryTable("SELECT * FROM penyewaan WHERE status_bayar IS TRUE");
  }