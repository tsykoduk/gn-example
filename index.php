<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>Hello World!</title>
		<?php 
			$asec = "";
			$bsec = "";
			$csec = "";
			$dsec = "";
			$rsec = "";
			$msec = 0;
			$multsec = "";
			$leaker[] = "start";
			$asec = mt_rand(0, 250000);
			$asec = mt_rand(0, 250000);
			$bsec = mt_rand(0, 250000);
			$csec = mt_rand(0, 250000);
			$dsec = mt_rand(0, 250000);
			$tsec = random_int ( 10 , 50000 );
			$multsec = random_int ( 1, 1000 );
			switch ($multsec) {
			case $multsec > 999 :
				$msec = 29;
				break;	
   			case $multsec > 990 :
				$msec = 12;
				break;
   			case $multsec > 950 :
				$msec = 4;
				break;
			case $multsec > 900 :  
    			$msec = 2;
				break;
			case $multsec > 700 :
				$msec = 0.5;
				break;
			}
			$rsec = ($asec + $bsec + $csec + $dsec) * ($msec + 1);
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
