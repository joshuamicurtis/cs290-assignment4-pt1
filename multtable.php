<?php 
  echo '<!DOCTYPE html>
    <html>
    <head>
    <meta charset="UTF-8">
    <title>cs290-Assignment4 Part1</title>	
	</head>
	<body>';

  $minMultiplicand = ($_GET['min-multiplicand']);
  $maxMultiplicand = ($_GET['max-multiplicand']);
  $minMultiplier = ($_GET['min-multiplier']);
  $maxMultiplier = ($_GET['max-multiplier']);
  echo 'Minimum-multiplicand: ' . $minMultiplicand . '<br>';
  echo 'Maximum-multiplicand: ' . $maxMultiplicand . '<br>';
  echo 'Minimum-multiplier: ' . $minMultiplier . '<br>';
  echo 'Maximum-multiplier: ' . $maxMultiplier . '<br>';
 
  $makeTable = TRUE;
  //Check that min is less than or equal to max
  if ($minMultiplicand > $maxMultiplicand) {
    echo 'Minimum multiplicand is larger than maximum multiplicand. <br>';
	$makeTable = FALSE;
  }
  if ($minMultiplier > $maxMultiplier) {
    echo 'Minimum multiplier is larger than maximum multiplier. <br>';
	$makeTable = FALSE;
  }
  
  
  //Check if values are zero or greater
  //Check that values are numbers
  if ($minMultiplicand < 0) {
    echo 'Minimum multiplicand must be zero or greater. <br>';
	$makeTable = FALSE;
  } 
  elseif (!ctype_digit($minMultiplicand)) {
    echo 'Minimum multiplicand must be an integer. <br>';
  }
  if ($maxMultiplicand < 0) {
    echo 'Maximum multiplicand must be zero or greater. <br>';
	$makeTable = FALSE;
  }
  elseif (!ctype_digit($maxMultiplicand)) {
    echo 'Maximum multiplicand must be an integer. <br>';
	$makeTable = FALSE;
  }
  if ($minMultiplier < 0) {
    echo 'Minimum multiplier must be an zero or greater. <br>';
	$makeTable = FALSE;
  }
  elseif (!ctype_digit($minMultiplier)) {
    echo 'Minimum multiplier must be an integer. <br>';
	$makeTable = FALSE;
  }
  if ($maxMultiplier < 0) {
    echo 'Maximum multiplier must be an zero or greater. <br>';
	$makeTable = FALSE;
  }
  elseif (!ctype_digit($maxMultiplier)) {
    echo 'Maximum multiplier must be an integer. <br>';
	$makeTable = FALSE;
  }
  
  //Make multiplication table if input pass data validation
  if ($makeTable === TRUE) {

	echo '<table border="1">';
	$i = $minMultiplicand;
	$j = $minMultiplier;
	echo '<tr><td>';
	for ($j; $j <= $maxMultiplier; $j++) {
	    echo ' <td> ' . $j;
	  }
	$j = $minMultiplier;
	for ($i; $i <= $maxMultiplicand; $i++) {
	  echo ' <tr> <td> ' . $i;
	  for ($j; $j <= $maxMultiplier; $j++) {
	    echo ' <td> ' . $j * $i;
	  }
	  $j = $minMultiplier;
	}
	echo '</table>';
  }
  
  echo '</body></html>';
?>