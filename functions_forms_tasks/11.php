<?php
if ($_POST) {
$str = $_POST['a'];
UP ($str);
}
function UP ($str){
$str = explode(". " , $str);
foreach ( $str as $val ){

echo mb_strtoupper(mb_substr($val, 0, 1)) . mb_substr($val, 1);
}
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
