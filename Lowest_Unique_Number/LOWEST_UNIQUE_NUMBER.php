<?php
	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');
	$string_array = array();
	$count = count($fh);

	for ($i=0; $i < $count; $i++) 
	{ 	
		$result = array();
		$string_array = explode(" ", trim($fh[$i]));
		$result = explode(" ", trim($fh[$i]));
		sort($string_array);
		$count_array = array_count_values($string_array);

		foreach ($count_array as $value => $numb) 
		{
			if ($numb == 1) 
			{
				$r = $value;
				break;
			}
			else $r = 0;
		}

		foreach ($result as $key => $value) 
		{
			if ($r == $value) 
			{
				$r = intval($key) + 1;
				break;
			}
		}
		
		echo $r . "\n";
	}	
?>