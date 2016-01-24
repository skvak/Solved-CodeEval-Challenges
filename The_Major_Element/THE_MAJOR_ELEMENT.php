<?php

	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');
	$count_fh = count($fh); //numbers of lines in massive
	$numbers = array();
	$test_array = array();

	for ($i = 0; $i < $count_fh; $i++) 
	{ 	
		$numbers = explode(",", trim($fh[$i]));
		$L = count($numbers);
		$test_array = array_count_values($numbers);

		$a = 'None';
		foreach ($test_array as $key => $value) 
		{
			if ($value > $L/2) 
			{
				$a = $key;
				break;
			}
		}
		echo $a . "\n";
	}

?>