<?php
	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');
	$string_array = array();
	$count = count($fh);

	for ($i=0; $i < $count; $i++) 
	{ 
		if ($fh[$i] == '') 
		{
			break;
		}
		
		$string_array = explode(" ", trim($fh[$i]));
		$count_words = count($string_array) - 1;

		$a = strlen($string_array[$count_words]);
		$res = $string_array[$count_words];

		for ($j = $count_words; $j > 0; $j--) 
		{	
			if (strlen($string_array[$j-1]) >= $a) 
			{
				$a = strlen($string_array[$j-1]);
				$res = $string_array[$j-1];
			}
		}
		
		echo $res . "\n";
	}
?>