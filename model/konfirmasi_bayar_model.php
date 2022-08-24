// wip
<?php
  function getPenyewaanByUsername($username) 
  {
    $penyewaan = query("SELECT * FROM penyewaan WHERE status_bayar IS TRUE AND username LIKE '%" . $username . "%'");
  }

  function getAllPenyewaan()
  {
    $penyewaan = query("SELECT * FROM penyewaan WHERE status_bayar IS TRUE");
  }