<?php
function simpanData($sql)
{
    require '../model/db_connection.php';

    openConn();
    mysqli_query($conn,$sql);
}
