<?php 
  echo '<!DOCTYPE html>
    <html>
    <head>
    <meta charset="UTF-8">
    <title>cs290-Assignment4 Part1</title>	
	</head>
	<body>';
  // Determine if request is POST or GET
  // Got help developing this code from stackoverflow http://stackoverflow.com/questions/1823406/what-does-utma-mean
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (count($_POST) === 0) {
	  echo '{"Type":"[POST]","parameters":null}';
	}
    echo json_encode($_POST);	
  }
  
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (count($_GET) === 0) {
	  echo '{"Type":"[GET]","parameters":null}';
	}
	echo json_encode($_GET);	
  }
  
  echo '</body></html>';
?>