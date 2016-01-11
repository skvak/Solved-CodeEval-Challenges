<?php

	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');
	$string_array = array();
	$count = count($fh);

	for ($i = 0; $i < $count; $i++) 
	{ 
		$string_array = explode(" ", trim($fh[$i]));

		$n = null; 
		$counter = 0;
		$numbers = array();
		$l = count($string_array);

		foreach($string_array as $key => $num) 
		{
			if ($n === null) 
			{
				$n = $num;
				$counter = 0;
			}
			
			if ($n === $num) 
			{
				$counter++;
			}
			
			else 
			{
				$numbers[] = $counter;
				$numbers[] = $n;
				$n = $num;
				$counter = 1;	
			}

			if ($key === $l-1) 
			{
				$numbers[] = $counter;
				$numbers[] = $n;
			}
		}

		$res = implode(" ", $numbers);

		echo $res . "\n";
	}	
?>