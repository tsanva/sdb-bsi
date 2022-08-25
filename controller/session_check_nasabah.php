<?php
session_start();
if (!isset($_SESSION["nasabah"])) {
	header("Location:../view/form_harga.php");
	exit;
}
