<?php

	$arr = array(
	'green'=>'зеленый',
	'red'=>'красный',
	'blue'=>'голубой');
	
	foreach ($arr as $key => $val) {
		$en = array ( $key );
		var_dump ($en) ;
		echo "<br>";
}
	foreach ($arr as $k => $v) {
		$ru = array ( $v );
		var_dump ($ru) ;
		echo "<br>";
	}
	
	
?>