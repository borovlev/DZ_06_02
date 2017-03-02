<?php
<<<<<<< HEAD
function myrev ($a) {
=======
function res ($a) {
>>>>>>> dc6af4c334a465030b598d5682b244fd0e304517

$arr = explode(".", $a); 
$backTxt = "";

for ($i = count($arr) - 1; $i >= 0; $i--) {
$backTxt .= " " . $arr[$i];
}

return $backTxt;
}
<<<<<<< HEAD
if ($_POST) {
echo myrev($_POST['a']);
}
=======

echo res($_POST['a']);
>>>>>>> dc6af4c334a465030b598d5682b244fd0e304517
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
