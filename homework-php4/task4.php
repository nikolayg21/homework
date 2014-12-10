<?php 

$one = rand(1, 50);
	numbers($one);

	function numbers($x) {
		for ($i=1; $i <= $x; $i++) { 
			echo "$i ";
		}

	}

?>