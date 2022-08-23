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

    require 'db_connection.php';

    $query = mysqli_query($conn, "SELECT * FROM petugas WHERE password='$password' AND username='$username'");
    $row = mysqli_num_rows($query);

    if ($row == 1) {
      $_SESSION["petugas"] = true;
      $_SESSION["username"] = $username;

      header("location: dashboard_petugas.php"); 
    } else {
      $error = "username atau password anda salah";
    }
    mysqli_close($conn);
  }
}
