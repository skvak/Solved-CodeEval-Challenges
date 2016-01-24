<?php

	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');
	$count_fh = count($fh); //numbers of lines in massive

	function multiples($x, $n)  //function 
	{
		$numb = $x;
		while (++$numb) 
		{
			if ($numb%$n == 0) 
			{
				echo "$numb \n";
				break;
			}
		}	
	}

	for ($i = 0; $i <= $count_fh-1; $i++)   //read data from massive
	{
		$array = split(",", $fh[$i]);
		multiples($array[0], $array[1]); //call the function and substitute the values of an array
	}

?>