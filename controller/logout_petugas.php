<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: ../view/petugas_login.php");
exit;
