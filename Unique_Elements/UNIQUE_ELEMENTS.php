<?php

//$fh = file($argv[1]); //read all file in massive
$fh = file ('c:\1.txt');
$count_fh = count($fh); //numbers of lines in massive

for ($i = 0; $i < $count_fh; $i++) 
{ 
	$string_array = explode(",", trim($fh[$i]));
	$string_array = array_unique($string_array);
	echo implode(",", $string_array) . "\n";
}

?>