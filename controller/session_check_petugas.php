<?php
session_start();
if (!isset($_SESSION["petugas"])) {
  header("Location:admin_login.php");
  exit;
}
