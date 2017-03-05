<?php

function myrev ($a) {

$arr = explode(".", $a); 
$backTxt = "";

for ($i = count($arr) - 1; $i >= 0; $i--) {
$backTxt .= " " . $arr[$i];
}

return $backTxt;
}

if ($_POST) {
echo myrev($_POST['a']);
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
