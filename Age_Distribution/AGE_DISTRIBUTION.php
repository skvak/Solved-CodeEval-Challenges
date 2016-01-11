<?php

	//$fh = file($argv[1]); //read all file in massive
	$fh = file ('c:\1.txt');

	$a = "Still in Mama's arms";
	$b = "Preschool Maniac";
	$c = "Elementary school";
	$d = "Middle school";
	$e = "High school";
	$f = "College";
	$g = "Working for the man";
	$h = "The Golden Years";
	$j = "This program is for humans";


	foreach ($fh as $key => $value) 
	{ 	
		$age = trim($value);
		
		if (($age > 0) and ($age <= 2)) 
		{
			echo $a;
		}
		elseif (($age >= 3) and ($age <= 4)) 
		{
			echo $b;
		}
		elseif (($age >= 5) and ($age <= 11)) 
		{
			echo $c;
		}
		elseif (($age >= 12) and ($age <= 14)) 
		{
			echo $d;
		}
		elseif (($age >= 15) and ($age <= 18)) 
		{
			echo $e;
		}
		elseif (($age >= 19) and ($age <= 22)) 
		{
			echo $f;
		}
		elseif (($age >= 23) and ($age <= 65)) 
		{
			echo $g;
		}
		elseif (($age >= 66) and ($age < 100)) 
		{
			echo $h;
		}
		else echo $j;

		echo "\n";	
	}
	
?>