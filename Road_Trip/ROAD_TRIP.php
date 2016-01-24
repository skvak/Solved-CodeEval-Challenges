<?php

	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');
	$count_fh = count($fh); //numbers of lines in massive

	for ($i = 0; $i < $count_fh; $i++) 
	{ 	
		$string = array();
		$city_dist = array();
		$sort_array = array();
		
		$string = explode(";", trim($fh[$i]));
		array_pop($string);
		$string = array_map('trim', $string);
		$count = count($string);

		for ($n=0; $n < $count; $n++) 
		{ 
			$city_dist = explode(",", $string[$n]);
			$key = $city_dist[0];
			$sort_array[$key] = $city_dist[1];
		}

		sort($sort_array);
		$temp = 0;
		$distances = array();

		for ($m=0; $m < $count; $m++) 
		{ 
			$distances[] = ($sort_array[$m] - $temp);
			$temp = $sort_array[$m];
		}
		
		$result = implode(",", $distances);
		echo $result . "\n";
	}

?>