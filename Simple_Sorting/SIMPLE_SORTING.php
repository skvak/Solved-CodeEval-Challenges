<?php

	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');
	$count_fh = count($fh); //numbers of lines in massive
	$string = array();
	$result = array();

	for ($i = 0; $i < $count_fh; $i++) 
	{ 	
		$string = explode(" ", trim($fh[$i]));
		sort($string);
		$string = implode(" ", $string);
		echo $string . "\n";
	}

?>