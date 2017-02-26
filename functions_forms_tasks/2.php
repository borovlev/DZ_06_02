<?php
//Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.

$a = $_POST['a'];
$a = explode(" ", $a);

function top3 ($a) {
	$arr = [];
	foreach ($a as $word) {
		$arr[$word] = strlen($word);
	}
	arsort ($arr);
	array_slice($arr, 0, 3);
	echo "<pre>";
	var_dump(array_slice($arr, 0, 3));
	echo "<pre>";
	
}
top3($a);

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