<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: ../view/user_login.php");
exit;
