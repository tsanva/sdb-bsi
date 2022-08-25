<?php

function openConn()
{
require '../config.php';

$conn = mysqli_connect($server, $user, $password, $db);
}

function closeConn($conn) {
  mysqli_close($conn);
}