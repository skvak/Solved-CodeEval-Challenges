<?php
    //$fh = file($argv[1]); //read all file in massive
    $fh = file ('c:\1.txt');
    $count_fh = count($fh); //numbers of lines in massive

    function fb($n)
    {
        if ($n == 0) 
        {
        	return 0;
        }
        elseif ($n < 3 and $n!==0) 
        {
            return 1; 
        }
        else 
        {
            return (fb($n-1) + fb($n-2));
        }
    }

    for ($i = 0; $i < $count_fh; $i++) 
    { 
    	echo fb($fh[$i]) . "\n";
    }
?>