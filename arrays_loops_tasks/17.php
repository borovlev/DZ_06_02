<?php
	
	$myArray = array ( "Январь", 
	"Февраль","Март","Апрель","Май","Июнь","Июль","Август",
	"Сентябрь","Октябрь", "Ноябрь","Декабрь",);
	$month = "Февраль";
	foreach ($myArray as $num ) {
	if ( $num == $month  ) {
		echo  "<b>". $month  . " </b><br>";
	} else {
		echo $num . "<br>";
	}
	}
?>