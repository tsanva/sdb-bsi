<?php
require '../model/db_connection.php';
function simpanData($sql){
    mysqli_query($conn,$sql);
}


?>