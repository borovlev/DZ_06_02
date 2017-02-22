<?php
$colors = array("red", "yellow", "blue", "gray", "maroon", "brown", "green"); 

$row = 10;
$cols = 10;

$rand = rand(1, 255);

echo '<table>'; 
for ($r = 1; $r <= $row; $r++) { 
echo '<tr>'; 
for($c = 1; $c <= $cols; $c++) { 
$col = array_rand($colors);  
echo "<th style='background-color:" . $colors[$col] . "'>"; 
echo $rand ; 
echo '</th>'; 
} 
echo '</tr>'; 
} 
echo '</table>';
?>