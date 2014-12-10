<?php 

function varibleParams() {
	$first = 0;
	$second = func_get_args();
	foreach ($second as $args) {
		$first += $args;

	}
	return $first;
}

echo varibleParams(10, 30) . ' ' .varibleParams(44, 76) . '<br / >';  
echo varibleParams(21, 44, 77) . ' ' .varibleParams(12, 111,55) . ' ' .varibleParams(50, 152, 228, 43) . '<br />';
echo varibleParams(12, 04, 11, 10, 29) . ' ' .varibleParams(39, 205, 86, 92, 05). ' ' .varibleParams(78, 148, 303, 57). ' ' .varibleParams(101, 202, 404, 505, 1002). ' ' .varibleParams(3, 13, 55, 481, 200);

 
?>

