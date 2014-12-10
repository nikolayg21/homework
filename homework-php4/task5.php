<?php 

	$numb = rand(1, 100);	
		evenNumber($numb);

		function evenNumber($n) {
			for ($i=1; $i <= $n; $i++) { 
				if ($i % 2 != 0) {
					echo "$i ";
				}
			}
		}

?>