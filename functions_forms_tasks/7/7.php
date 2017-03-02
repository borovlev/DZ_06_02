<?php

if ($_POST) {
	$message = $_POST['a'];
	$name = $_POST['username'];
	$s = serialize($_POST);
	file_put_contents('messages.txt', $s . PHP_EOL, FILE_APPEND);
}
$com = file_get_contents('messages.txt');
$com = explode(PHP_EOL, $com);

foreach ($com as $key => $coments) {
	if ($coments) {
		$com[$key] = unserialize($coments);
		continue;
	}
	unset($com[$key]);
}
?>


<!DOCTYPE HTML>
<html>
 <head>
  <title>PHP</title>
  <meta charset="utf-8">
 </head>
 <body>
	<hr>
	<?php foreach ($com as $coments) : ?>
	
	<i> <?=$coments['username']?></i><br>
	<?=$coments['a']?>
	<hr>
	<?php endforeach ?>
	
	<h1>Form</h1>
	
	<form method="post">
		<input type="name" name="username"><br> 
		<textarea name="a"></textarea><br>
		<button>Go</button>
	</form>
 </body>
</html>