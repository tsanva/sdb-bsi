<?php
function hitung()
{
	require '../controller/session_check_nasabah.php';

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

function hitungNext()
{
	require '../controller/session_check_nasabah.php';
    $x = 0;
	$jamin = 1500000;
    $tipe = $_POST['tipe'];
    $waktu = $_POST['jangka'];

    $_SESSION['tipe'] = $tipe;
    $_SESSION['waktu'] = $waktu;
    
    if($tipe == "large"){
        $x = $x + 800000;
    }else if($tipe == "medium"){
         $x = $x + 400000;
    }else{
        $x = $x + 300000;
                      }
    echo $bayar = $x * $waktu + $jamin;

    $_SESSION['bayar'] = $bayar;

    header("location: ../view/form_dokumen.php");
}

//menyimpan data ke database
function simpan()
{
    require '../controller/session_check_nasabah.php';
    require '../model/form_model.php';

    $fotokopi = $_POST['fotokopi'];
    $perjanjian = $_POST['perjanjian'];
    $tipe = $_SESSION['tipe'];
    $waktu = $_SESSION['waktu'];
    $bayar = $_SESSION['bayar'];
    $username = $_SESSION['username'];

    //membuat query
    $sql = "INSERT INTO penyewaan SET
    username = '$username,
    tipe = '$tipe',
    waktu_sewa = '$waktu',
    biaya_sewa = $bayar,
    fotokopi = $fotokopi,
    td_perjanjian = $perjanjian";

    //testing
    //echo $sql;

    //execute query
    simpan($sql);

    header("location: ../view/form_harga.php");
}
