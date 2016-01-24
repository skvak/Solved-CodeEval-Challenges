<?php

	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');
	$count_fh = count($fh); //numbers of lines in massive
	$result_string = array();

	for ($i = 0; $i < $count_fh; $i++) 
	{ 
		$string_array = explode(";", trim($fh[$i]));
		$array1 = explode(",", $string_array[0]);
		$array2 = explode(",", $string_array[1]);
		$count_arr1 = count($array1);
		$count_arr2 = count($array2);
		$k = 0;
		
		for ($n=0; $n < $count_arr1; $n++) 
		{ 
			for ($m=0; $m < $count_arr2; $m++) 
			{ 
				if ($array1[$n] == $array2[$m]) 
				{
					$result_string[$k] = $array1[$n];
					$k++;
				}
			}
		}
		
		echo implode(",", $result_string) . "\n";
		$result_string = array();
	}

?>