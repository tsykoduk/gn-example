<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>Hello World</title>
		<?php 
			$usec = ""; 
			$usec = random_int ( 400000 , 1600000 );
			echo $usec;
			usleep ( $usec );
		?>
	</head>
	<body>
		<h1>Hello World - Cool Feature PURLPLE</h1>
		<a href="php-info.php" id="" title="php-info">php-info</a>
	</body>
</html>
