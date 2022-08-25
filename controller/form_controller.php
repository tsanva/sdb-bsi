<?php
if(isset($_POST['next'])){

	$tipe = $_POST['tipe'];
	$waktu = $_POST['jangka'];
	
	header("location:../view/form_dokumen.php");	
}

if(isset($_POST['submit'])){
	$fotokopi = $_POST['fotokopi'];
	$perjanjian = $_POST['perjanjian'];

	header("location:../view/form_harga.php");
}
?>