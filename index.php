<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>Hello World!</title>
		<?php 
			$usec = "";
			$tsec = "";
			$rsec = "";
			$multsec = "";
			#global $leaker[];
			$usec = random_int ( 10000 , 100000 );
			$tsec = random_int ( 1000 , 200000 );
			$multsec = random_int ( 1, 10 );
			$rsec = $usec + $tsec;
			if ( $multsec > 9 ) {
				$rsec = $rsec * 5;
			}
			usleep ( $rsec );
			for ($x = 0; $x <= 100; $x++) {
    				$leaker[] = $rsec;
			}
			error_log("rsec pause length : ".$rsec." leaker array count : ".count($leaker) , 0);
		?>
	</head>
	<body>
		<h1>Hello World</h1>
		<a href="php-info.php" id="" title="php-info">php-info</a>
	</body>
</html>
