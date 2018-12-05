<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>Hello World!</title>
		<?php 
			$usec = "";
			$tsec = "";
			$rsec = "";
			$multsec = "";
			$usec = random_int ( 1000 , 50000 );
			$tsec = random_int ( 10 , 50000 );
			$multsec = random_int ( 1, 100 );
			switch ($multsec) {
   			case $multsec > 85 :
				$msec = 2;
				error_log("multiplier : 2" , 0);
				break;
			case $multsec > 95 :
    				$msec = 5;
				error_log("multiplier : 5" , 0);
				break;
			case $multsec > 99:
				$msec = 11;
				error_log("multiplier : 11" , 0);
				break;
			}
			$rsec = ($usec + $tsec) * ($msec +1);
			usleep ( $rsec );
			#for ($x = 0; $x <= 100; $x++) {
			#	$leaker[] = $rsec;
			#}
			error_log("rsec pause length : " . $rsec, 0) #" leaker array count : " . count($leaker) , 0);
		?>
	</head>
	<body>
		<h1>Hello World</h1>
		<a href="php-info.php" id="" title="php-info">php-info</a>
	</body>
</html>
