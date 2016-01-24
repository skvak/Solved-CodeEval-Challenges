<?php

	$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12); 
	
	for ($i = 0; $i < 12; $i++)
	{
		for ($j = 1; $j <= 12; $j++)
		{
			$pifagor[$i][$j] = intval($numbers[$i] * $j);
			echo sprintf("%4s", $pifagor[$i][$j]);
		}
		echo "\n";
	}

?>