<?php

	//$fh = file ($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');
	$count_fh = count($fh); //numbers of lines in massive
	
	for ($i = 0; $i < $count_fh; $i++)   //read data from massive
	{
		$array = explode(",", trim($fh[$i]));
		$number = $array[0];
		$p1 = $array[1];
		$p2 = $array[2];

		$binary = decbin($number); //decimal to binary
		$binary_arr = str_split($binary); //string binnary to array
		$reversed_binnary_arr = array_reverse($binary_arr); //reverse array

		if ($reversed_binnary_arr[$p1 - 1] == $reversed_binnary_arr[$p2 - 1]) //compare p1 and p2 in binnary number
		{
			echo "true \n";
		}
		elseif ($reversed_binnary_arr[$p1 - 1] !== $reversed_binnary_arr[$p2 - 1])
		{
			echo "false \n";
		}
	}
?>