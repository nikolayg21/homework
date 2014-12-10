<?php

$number = rand(-100, 100);
echo $number . "<br />";
if ($number < 0) {
echo "Отрицателно число.";
} else if ($number <=50) {
echo "Число между 0 и 50";
} else if($number <= 100) {  
echo '<div style="color:yellow">' . "Числото е по-голямо от 50;" . '</div>'; 
} 

?>