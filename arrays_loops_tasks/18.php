<?php
	
	$myArray = array ( "Понедельник", "Вторник", "Среда","Четверг","Пятница",
	"Суббота","Воскресенье");
	$weekend = "Суббота";
	$weekend2 = "Воскресенье";
	
	foreach ($myArray as $num ) {
	if ( $num == $weekend ) {
		echo  "<b>". $weekend  . " </b><br>";
	} elseif ( $num == $weekend2 ) {
		echo  "<b>". $weekend2  . " </b><br>";
	}
	else {
		echo $num . "<br>";
	}
	}
?>