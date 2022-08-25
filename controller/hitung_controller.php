<?php
 if (isset($_POST['submit'] )){
    var x = 0;
    $tipe = $_POST['loker'];
    $jangka = $_POST['jangka'];

    if($tipe == "Large"){
        x = x + 800000;
    }else if($tipe == "Medium"){
        x = x + 400000;
    }else{
        x = x + 300000;
    }
    $bayar = x * $jangka
 }
?>