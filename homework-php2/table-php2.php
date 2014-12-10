<?php 
$generation = 1;

for ($i=0; $i < 1000 ; $i++) { 
	echo $generation++ . '<br>';
	if ($i / 13) {
		echo "<span style='background-color:yellow;'> </span>";
	}
}



?>









