<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors','On');

if(!isset($_SESSION['loggedIn'])){
	    $_SESSION['loggedIn'] = False;
	  }
$username = $_POST['username'];

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  if ($_SESSION['loggedIn'] == False) {
    header('Location: login.php'); // From http://stackoverflow.com/questions/768431/how-to-make-a-redirect-in-php
  }
  else {
  	 echo '<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>cs290-Assignment4 Part1</title>	
    </head>
    <body>';
    
	if(session_status() == PHP_SESSION_ACTIVE){
      if(!isset($_SESSION['visits'])){
	    $_SESSION['visits'] = 0;
	  }
	  
      echo 'Hello ' . $username . ' you have visited this page ' . $_SESSION['visits'] . ' times before. <br>';
      echo 'Click <a href="logout.php">here</a> to logout. <br>';
	  $_SESSION['visits']++;
	  echo '<a href="content2.php">content2.php</a>';
	  
	}
  echo '
    </body>
  </html>';
  }
}  

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // From http://stackoverflow.com/questions/7711466/checking-if-form-has-been-submitted-php
	
  // Got part of the if statement from stack overflow: http://stackoverflow.com/questions/2352779/if-string-only-contains-spaces
  if ($username == NULL OR strlen(trim($username)) == 0) {
    echo '<!DOCTYPE html>
    <html>
    <head>
      <meta charset="UTF-8">
      <title>cs290-Assignment4 Part1</title>	
    </head>
    <body>';
    echo 'A username must be entered. Click <a href="http://web.engr.oregonstate.edu/~curtisjo/CS290/Assignment4-Part1/login.php">here</a> to return to the login screen.';
    echo '
    </body>
  </html>';
  }
  else {
    $_SESSION['loggedIn'] = True;
	 echo '<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>cs290-Assignment4 Part1</title>	
    </head>
    <body>';
    
	if(session_status() == PHP_SESSION_ACTIVE){
      if(!isset($_SESSION['visits'])){
	    $_SESSION['visits'] = 0;
	  }
	  
      echo 'Hello ' . $username . ' you have visited this page ' . $_SESSION['visits'] . ' times before. <br>';
      echo 'Click <a href="logout.php">here</a> to logout. <br>';
	  $_SESSION['visits']++;
	  echo '<a href="content2.php">content2.php</a>';
	  
	}
  echo '
    </body>
  </html>';
  }
}
?>