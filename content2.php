<?php
session_start();
  if ($_SESSION['loggedIn'] == False) {
    header('Location: login.php'); // From http://stackoverflow.com/questions/768431/how-to-make-a-redirect-in-php
  }

   echo '<a href="content1.php">content1.php</a>';
?>