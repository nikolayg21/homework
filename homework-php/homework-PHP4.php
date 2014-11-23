<!DOCTYPE html>
<html>
<head>
	<title>PHP Homework-4</title>
	<style>
	<?php 

	$x = rand(0, 800);

	$y = rand(0, 800);

	?>

	.box {
		width: 300px;
		height: 300px;
	}
	div {
		border: 1px solid red;
		position: absolute;
		top: <?php echo $y . "px;"; ?>
		left: <?php echo $x . "px;"; ?> 		
		background-color: red;
	}
	</style>
</head>
<body>
<?php 
$myhome = "Homework PHP";
echo '<div class="box">' . $myhome . '</div>'
?>
</body>
</html>