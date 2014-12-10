<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>user info</title>
</head>
<body>
<table border="4">



<?php 

	$info = array(
	'name' => 'Kalina',
	'username' => 'kalinapsk87',
	'e-mail' => 'kalina87@mail.bg',
	'count-visit' => '7949',
	'friends' => '703'
);

	echo "<tr>";	
	echo "<th> Име: </th>";
	echo "<th> Потребителско име: </th>";
	echo "<th> Е-mail: </th>";
	echo "<th> Брой посещения: </th>";
	echo "<th> Брой приятели: </th>";
	echo "</tr>"	;

	echo "<tr>";
	echo "<td>" . $info ['name'] . "</td>";
	echo "<td>" . $info ['username'] . "</td>";
	echo "<td>" . $info ['e-mail'] . "</td>";
	echo "<td>" . $info ['count-visit'] . "</td>";
	echo "<td>" . $info ['friends'] . "</td>";
	echo "</tr>";

	
?>

</table>
</body>
</html>