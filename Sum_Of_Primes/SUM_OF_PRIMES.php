<?php

	$counter = 0;

	for ($i = 2; $i < 100000; $i++) 
	{ 
		for ($j = 2; $j < 100000; $j++) 
		{ 
			if (($i % $j == 0) and ($i == $j))   
			{
				$n = $n + $i;
				$counter++; 
				break;
			}
			if ($i % $j == 0) 
			{
				break;
			}
		}

		if ($counter == 1000)
		{
			break;
		}
	}

	echo $n;

?>