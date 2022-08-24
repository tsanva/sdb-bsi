<?php
session_start();
if (!isset($_SESSION["nasabah"])) {
	header("Location:form.php");
	exit;
}
