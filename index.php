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
			$multsec = random_int ( 1, 10 );
			$rsec = $usec + $tsec;
			switch ($multsec) {
   			case 8:
				$rsec = $rsec * 3;
				error_log("multiplier : 3" , 0);
				break;
			case 9:
    				$rsec = $rsec * 6;
				error_log("multiplier : 6" , 0);
				break;
			case 10:
				$rsec = $rsec * 12;
				error_log("multiplier : 12" , 0);
				break;
			}
			usleep ( $rsec );
			for ($x = 0; $x <= 100; $x++) {
				$leaker[] = $rsec;
			}
			error_log("rsec pause length : " . $rsec . " leaker array count : " . count($leaker) , 0);
		?>
	</head>
	<body>
		<h1>Hello World</h1>
		<a href="php-info.php" id="" title="php-info">php-info</a>
	</body>
</html>
