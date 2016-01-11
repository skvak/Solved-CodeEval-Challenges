<?php

	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');
	$count_fh = count($fh); //numbers of lines in massive
	$string = array();
	$coord1 = array();
	$coord2 = array();

	for ($i = 0; $i < $count_fh; $i++) 
	{ 	
		$string = explode(") (", trim($fh[$i]));
		$coordinates1 = str_replace("(", "", $string[0]);
		$coordinates2 = str_replace(")", "", $string[1]);
		
		$coord1 = explode(",", $coordinates1);
		$coord2 = explode(",", $coordinates2);

		$coord1 = array_map('trim', $coord1);
		$coord2 = array_map('trim', $coord2);

		$distance = sqrt(($coord2[0] - $coord1[0])*($coord2[0] - $coord1[0]) + 
			($coord2[1] - $coord1[1])*($coord2[1] - $coord1[1]));

		echo $distance . "\n";
	}
?>