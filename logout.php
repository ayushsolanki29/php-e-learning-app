<?php

session_start();

session_unset();
session_destroy();
header("Location: login.php");
setcookie("userid", "", time() - 3600, '/');
exit;
?>