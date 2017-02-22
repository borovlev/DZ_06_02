<?php
$randArray = array ();

for ($i = 0; $i <= 4; $i++){
	$anyValue = rand();
	$randArray[] = $anyValue;
}
print_r ($randArray) ."<br>";
echo "<pre>";
echo max($randArray) . "<br>";
echo min($randArray) . "<br>";
echo "<pre>";
?>