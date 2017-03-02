<?php

 function getCommonWords($a,$b) {
	
	$value1 = explode(" ", $a);
	$value2 = explode(" ", $b);
	for ($i = 0; $i < count($value1) ; $i++) {
		for ($n = 0; $n < count($value2); $n++) {
		if ( $value1[$i] == $value2[$n]) {
				$result[] = $value1[$i];
                 continue;
			}
		}
	}
	return $result;
 }
if ($_POST) {
    $result = array();
    $a = $_POST['a'];
    $b = $_POST['b'];

    print_r(getCommonWords($a, $b));
}
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
	</form>
 </body>
</html>
