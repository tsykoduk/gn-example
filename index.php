<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>Hello World!</title>
		<?php 
			$GLOBAL[leaker];
			$usec = "";
			$tsec = "";
			$rsec = "";
			$multsec = "";
			$usec = random_int ( 10000 , 100000 );
			$tsec = random_int ( 100 , 100000 );
			$multsec = random_int ( 1, 10 );
			$rsec = $usec + $tsec;
			if ( $multsec == 10 ) {
				$rsec = $rsec * 5;
			}
			usleep ( $rsec );
			for ($x = 0; $x <= 100; $x++) {
    				$GLOBAL[leaker][] = $rsec;
			}
			error_log("rsec pause length : " . $rsec . " leaker array count : " . count($GLOBAL[leaker]) , 0);
		?>
	</head>
	<body>
		<h1>Hello World</h1>
		<a href="php-info.php" id="" title="php-info">php-info</a>
	</body>
</html>
