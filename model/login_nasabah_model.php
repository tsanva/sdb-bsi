// WIP
<?php

function query() {
  require '../model/db_connection.php';
  
  $query = mysqli_query($conn, "SELECT * FROM nasabah WHERE password='$password' AND username='$username'");
  $row = mysqli_num_rows($query);
  
  return $row;
}

function closeConn($conn) {
  mysqli_close($conn);
}