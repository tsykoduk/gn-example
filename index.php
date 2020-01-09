<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>Hello World!</title>
		<?php 
			$usec = "";
			$tsec = "";
			$rsec = "";
			$msec = 0;
			$multsec = "";
			$leaker[] = "start";
			$usec = random_int ( 1000 , 50000 );
			$tsec = random_int ( 10 , 50000 );
			$multsec = random_int ( 1, 1000 );
			switch ($multsec) {
			case $multsec > 900 :
				$msec = 29;
				break;	
   			case $multsec > 800 :
				$msec = 19;
				break;
   			case $multsec > 700 :
				$msec = 9;
				break;
			case $multsec > 500 :  
    			$msec = 5;
				break;
			case $multsec > 250 :
				$msec = 2;
				break;
			}
			$rsec = ($usec + $tsec) * ($msec +1);
			usleep ( $rsec );
			for ($x = 0; $x <= 1000; $x++) {
				global $leaker;
				$leaker[] = $rsec;
			}
			error_log("rsec pause length:" . $rsec . " Class of Request:" . $multsec . ", Mult:" . $msec , 0); #. " leaker array count:" . count($leaker) , 0);
		?>
	</head>
	<body>
		<h1>Hello World</h1>
		<a href="php-info.php" id="" title="php-info">php-info</a>
	</body>
</html>
