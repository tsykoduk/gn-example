<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>Hello World!</title>
		<?php 
			$usec = "";
			$tsec = "";
			$rsec = "";
			$multsec = "";
			$leaker[] = "100";
			$usec = random_int ( 1000 , 50000 );
			$tsec = random_int ( 10 , 50000 );
			$multsec = random_int ( 1, 100 );
			switch ($multsec) {
   			case $multsec > 99:
				$msec = 19;
				break;
   			case $multsec > 95:
				$msec = 9;
				break;
			case $multsec > 90 :  
    				$msec = 5;
				break;
			case $multsec > 80 :
				$msec = 2;
				break;
			}
			$rsec = ($usec + $tsec) * ($msec +1);
			usleep ( $rsec );
			for ($x = 0; $x <= $rsec; $x++) {
				$leaker[] = $rsec;
			}
			error_log("rsec pause length:" . $rsec . ", Mult:" . $msec . " leaker array count:" . count($leaker) , 0);
		?>
	</head>
	<body>
		<h1>Hello World</h1>
		<a href="php-info.php" id="" title="php-info">php-info</a>
	</body>
</html>
