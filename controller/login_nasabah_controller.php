<?php
session_start();

if (isset($_SESSION["nasabah"])) {
  header("Location: ../view/form_harga.php");
  exit;
}

//$error = '';
if (isset($_POST['submit'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "username atau password anda salah!";
  } else {
    $username = $_POST['username'];
    $password = $_POST['password'];

    require '../model/login_nasabah_model.php';

    $row = query();

    if ($row == 1) {
      $_SESSION["nasabah"] = true;
      $_SESSION["username"] = $username;

      header("Location: ../view/form_harga.php");
    } else {
      $error = "username atau password anda salah";
    }
    closeConn($conn);
  }
}
