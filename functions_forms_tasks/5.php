<?php

function derectory ( $a , $b) {
		$dir = scandir($a);
	foreach ( $dir as $value ) {
			if ( $value == $b ) {
				echo $value;
				break;
			}	elseif ($value !== $b){
				continue;
			}
				else {
				echo "Не найдено";
			}
			
	}
	}
		
derectory ('C:/xampp/htdocs', 'DZ');
?>