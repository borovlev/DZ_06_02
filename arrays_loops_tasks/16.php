<?php
	
	$myArray = array ( 1, 2, 3, 4, 5, 6, 7, 8, 9 );
	
	foreach ($myArray as $num ) {
	if ( $num == 3 || $num == 6 ) {
		echo $num  . " ";
	} else {
		echo $num . ",<br>";
	}
	}
?>