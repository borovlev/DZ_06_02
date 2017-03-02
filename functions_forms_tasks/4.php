<?php

function derectory ( $a ) {
		$dir = scandir($a);
		echo "<pre>";
		print_r ($dir);
		echo "</pre>";
		
}
derectory ('..');
?>