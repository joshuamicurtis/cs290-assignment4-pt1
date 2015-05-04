<?php
Session_start(); //All the code on this page came from the group study session
Session_unset();
Session_destroy();
header("Location:  login.php");
exit();
?>