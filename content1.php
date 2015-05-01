<?php 
  echo '<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>cs290-Assignment4 Part1</title>	
    </head>
    <body>';
	
  $username = ($_POST['username']);
  echo 'Hello ' . $username;
  
  // Got part of the if statement from stack overflow: http://stackoverflow.com/questions/2352779/if-string-only-contains-spaces
  if ($username == NULL OR strlen(trim($username)) == 0) {
    echo 'A username must be entered. Click <a href="http://web.engr.oregonstate.edu/~curtisjo/CS290/Assignment4-Part1/login.php">here</a> to return to the login screen.';
  }
  
  echo '
    </body>
  </html>';
?>