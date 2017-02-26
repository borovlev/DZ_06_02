<?php

$n = $_POST['n'];
function delete ( $n ){
	$text = file_get_contents('text.txt');
	$words = explode (" " , $text);
	foreach ($words as $word) {
		if (mb_strlen($word, 'UTF-8') <= $n) {
		echo $word . " ";
		} else {
		unset ($word);
		}
	}
}
delete ($n);
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
		<textarea name="n"></textarea><br>
		<button>Go</button>
	</form>
 </body>
</html>