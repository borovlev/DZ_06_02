<?php
$str = $_POST['a'];
function UP ($str){
$str = explode("." , $str);
foreach ( $str as $v ){
$a = ucfirst($v);
echo "$a. ";
}
}
UP ($str);
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
