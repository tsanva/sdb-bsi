<?php
session_start();
if (!isset($_SESSION["petugas"])) {
  header("Location:../view/petugas_login.php");
  exit;
}
