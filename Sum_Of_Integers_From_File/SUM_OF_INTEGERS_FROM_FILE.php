<?php

	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');
	$count_fh = count($fh); //numbers of lines in massive
	$sum = 0;

	for ($i = 0; $i < $count_fh; $i++) 
	{ 
		$sum = $sum + $fh[$i];
	}
	echo $sum;

?>