<?php
	$week = array ("Monday", "Tuesday", "Wednesday","Thursday","Friday","Saturday","Sunday");
	$day = date("l");
	foreach ($week as $value) {
		if ( $value ==  $day ) {
			echo "<i>" .  $day . "</i><br>";
		} else {
			echo $value . "<br>";
		}
	}
?>