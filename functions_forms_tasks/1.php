<?php
		$result = array();
		$a = $_POST['a'];
		$b = $_POST['b'];
 function getCommonWords($a,$b) {
	
	$value1 = explode(" ", $a);
	$value2 = explode(" ", $b);
	for ($i = 0; $i <= count($a) ; $i++) {
		for ($n = 0; $n <= count($b); $n++) {
		if ( $value1[$i] == $value2[$n]) {
				$result[] = $value1[$i];
			}
		}
	}
	return $result;
 }
 getCommonWords($a,$b);
 print_r(getCommonWords($a,$b));
 
?>

<!DOCTYPE HTML>
<html>
 <head>
  <title>PHP</title>
  <meta charset="utf-8">
 </head>
 <body>

	<h1>Form</h1>
	
	<form method="post">
		<textarea name="a"></textarea><br>
		<textarea name="b"></textarea><br>
		<button>Go</button>
 </body>
</html>
