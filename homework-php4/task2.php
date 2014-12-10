<?php 

$func = rand();
 
 if ($func % 2 == 0) {
 	echo "Четно";
}	else {
 	 	echo "Нечетно";
 	 } 
 		
 $f = numbers($func);
 echo "$f";

 function numbers($f) {
 	echo "<br>";
 return $f;
}
?>