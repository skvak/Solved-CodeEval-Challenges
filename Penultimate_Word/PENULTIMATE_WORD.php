<?php

	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');
	$count_fh = count($fh); //numbers of lines in massive
	$string = array();

	for ($i = 0; $i < $count_fh; $i++) 
	{ 	
		$string = explode(" ", $fh[$i]);
		$count = count($string);
		echo $string[$count-2] . "\n";
	}

?>