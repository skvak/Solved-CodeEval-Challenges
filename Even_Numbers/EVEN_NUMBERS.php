<?php

	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');

	foreach ($fh as $value) 
	{
		$r = 0;
		if (intval(trim($value)) % 2 == 0) 
		{
			$r = 1;
		}
		echo $r . "\n";
	}
?>