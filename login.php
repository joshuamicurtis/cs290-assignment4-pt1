<?php 
  echo '<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>cs290-Assignment4 Part1</title>	
    </head>
    <body>
	  <p>Enter a username and log in.</p>
	  <form action="http://web.engr.oregonstate.edu/~curtisjo/CS290/Assignment4-Part1/content1.php" method="post">
        <p>
	      <label for="username">username</label>
	      <input type="text" id="username" name="username" />
	    </p>
		<button type="submit">Login</button>
	  </form>
    </body>
  </html>';
?>