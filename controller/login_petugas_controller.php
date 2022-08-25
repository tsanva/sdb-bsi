<?php
session_start();

if (isset($_SESSION["petugas"])) {
  header("Location: ../view/data_sewa.php");
  exit;
}

//$error = '';
if (isset($_POST['submit'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "username atau password anda salah!";
  } else {
    $username = $_POST['username'];
    $password = $_POST['password'];

    require '../model/login_petugas_model.php';

    $row = query();

    if ($row == 1) {
      $_SESSION["petugas"] = true;
      $_SESSION["username"] = $username;

      header("Location: ../view/data_sewa.php");
    } else {
      $error = "username atau password anda salah";
    }
    closeConn($conn);
  }
}
