<?php

$number1 = rand(0, 100);

$number2 = rand(0,100); 

echo $number1++;

echo "<br>";

echo $number2--;
echo "<br>";

$number1++;

echo "<br>";

$number2--;

$number3 = $number1 % $number2 ;

echo $number3;

?>