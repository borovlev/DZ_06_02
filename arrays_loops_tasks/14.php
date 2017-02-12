<?php
	
	$myArray = array ( 4, 2, 5, 19, 13, 0, 10 );
	
	foreach ($myArray as $num ) {
		if ( $num == 2 || $num == 3 || $num == 4 ) {
			echo "Есть!";
		} else {
			echo "Нет!";
		}
		break;
	}

?>