<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>dark thinKING</title>
</head>
<body>
<table border="2">
	


<?php 

	$favor = array(
	'Любим филм' => 'Дрога',
	'Любим цвят' => 'Зелен',
	'Любима песен' => 'Let\'s get high',
	'Любима зодия' => 'Телец',
	'Любима марка автомобил' => 'RS6' 

);

            
	echo "<tr>";
	foreach ($favor as $key => $value) {

		echo "<th>" . $key . "</th>";

		echo "<tr>";

		echo "<td>" . $value . "</td>";

		echo "</tr>";

		ksort($favor);

	}

	echo "</tr>";


?>

</table>
</body>
</html>