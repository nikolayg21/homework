<?php

for ($i=0; $i < 20 ; $i++) { 
 	$number = rand(1, 20);
 	$number1 = rand(1, 20);
 	$number2 = rand(1, 20);

 	$x = calculator($number, $number1, $number2);

 	echo "$x";
 } 

 function calculator($number, $number1, $number2) {
 	$x = $number * $number1 * $number2; 
 	echo "<br>"; 
 	return $x;
 }

 ?>