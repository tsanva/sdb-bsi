// WIP
<?php
session_start();

if (isset($_SESSION["petugas"])) {
  header("Location: dashboard_petugas.php");
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

      header("location: dashboard_petugas.php"); 
    } else {
      $error = "username atau password anda salah";
    }
    closeConn($conn);
  }
}
