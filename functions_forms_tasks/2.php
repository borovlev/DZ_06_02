<?php
//Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.

$a = $_POST['a'];
$myArray = array ();

function top3 ($a) {
	$value = explode(" ", $a);
	for ($i=0; $i <= count($a) ; $i++) {
		$myArray[] = $value[$i];		
	}
	rsort($myArray);
	echo $myArray[1];
	echo $myArray[2];
	echo $myArray[3];
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
 </body>
</html>