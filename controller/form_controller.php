<?php
function hitung(){
	//require '../controller/session_check_nasabah.php';

	$x = 0;
	$jamin = 1500000;
    $tipe = $_POST['tipe'];
    $waktu = $_POST['jangka'];
    if($tipe == "large"){
        $x = $x + 800000;
    }else if($tipe == "medium"){
         $x = $x + 400000;
    }else{
        $x = $x + 300000;
                      }
    echo $bayar = $x * $waktu + $jamin;
}
?>
