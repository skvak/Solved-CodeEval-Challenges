<?php

	//$fh = file($argv[1]);
	$fh = file('c:\1.txt'); //открываем файл
	$numb = count($fh);

	function fizbuzz($x, $y, $n)  //создаем функцию для определения F, B, FB
	{
		$i=1;

		while ($i <= $n) 
		{ 
		    $array_index = 0;

	    	if (($i%$x == 0) and ($i%$y == 0)) 
    		{
    			$array[$array_index] = "FB";
    			echo $array[$array_index] . ' ';
    		}
	    
	    	elseif ($i%$y == 0) 
    		{
    			$array[$array_index] = "B";
    			echo $array[$array_index] . ' ';
    		}
	    	
	    	elseif ($i%$x == 0) 
    		{
    			$array[$array_index] = "F";
    			echo $array[$array_index] . ' ';
    		}
	    
	    	else
    		{ 	
    			$array[$array_index] = $i;
    			echo $array[$array_index] . ' ';
	   		}

		    $array_index++;
		    $i++;
		}
	}

	for ($j=0; $j < $numb; $j++) 
	{ 
		$array = spliti(" ", $fh[$j]); //записываем значения из строки в массив
		fizbuzz($array[0], $array[1], $array[2]); //вызываем функцию со значениями нашего массива
		echo "\n";
	}

?>