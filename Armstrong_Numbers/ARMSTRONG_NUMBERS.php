<?php

	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');
	$count_fh = count($fh); //numbers of lines in massive
	$string = array();

	for ($i = 0; $i < $count_fh; $i++) 
	{ 	
		$number = 0;
		$string = trim($fh[$i]);
		$lenght_string = intval(strlen($string));
		
		for ($j=0; $j < $lenght_string; $j++) 
		{ 
			$number = $number + pow(intval($string[$j]), $lenght_string);	
		}
		
		if ($number == $string) 
		{
			echo 'true';
		}
		else echo 'false';
		
		echo "\n";
	}
?>