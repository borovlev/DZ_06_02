<?php

	$arr = array(
	'green'=>'зеленый',
	'red'=>'красный',
	'blue'=>'голубой');
	foreach ($arr as $key => $val) {
		$en = array ($key);
		print_r ($en) ;
		echo "<br>";
} 	
	foreach ($arr as $k => $v) {
		$ru = array ( $v );
		print_r ($ru) ;
		echo "<br>";
	}
	
	
?>