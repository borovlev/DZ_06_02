<?php

if ($_POST) {
	$str = $_POST['a'];
	 uniq ($str) ;
}

function uniq ( $a ) {
	$arr = explode(" ", mb_strtolower($a));
	$un = array_unique($arr);
	echo "Уникальных слов - " . count($un);
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
		<button>Go</button>
	</form>
 </body>
</html>