<?php

	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');
	$count_fh = count($fh); //numbers of lines in massive
	$words_array = array();

	for ($i = 0; $i < $count_fh; $i++) 
	{ 
		if (trim($fh[$i]) !== "") 
		{
			$words_array[$i] = explode(" ", trim($fh[$i]));;
			krsort($words_array[$i]);
			$result = implode(" ", $words_array[$i]);
			echo $result . "\n";
		}
	}

?>