<?php
$randArray = array ();
$result = 0;
$array2 = array ();
for ($i = 0; $i <= 4; $i++){
	$anyValue = rand(1, 100);
	$randArray[] = $anyValue;
	if ( $anyValue % 2 == 0 ) {
	$result .= $anyValue;
	} else {
		$array2[] = $anyValue;
	}
}	
	echo "<pre>";
	print_r ($randArray);
	echo "</pre>";
	echo "не парные" . print_r($array2);
	echo "<p>Произведение = " . $result;
?>