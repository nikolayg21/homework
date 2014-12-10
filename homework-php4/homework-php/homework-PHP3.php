<?php 

$number = rand(1, 3);
echo $number . "<br />";
switch ($number) {
	case "1":
	echo '<div style="color:blue">' . "Променливата е равна на 1" . '</div>';
break;
case "2":
echo  '<style="border 1px solid red;">' . '<img src="images/images.jpg">' . '</style>'; 
break;
case "3":
echo '<span style="background-color:red" "color:white">' . "Стойността е равна на 3" . '</span>';
break;
}

?>