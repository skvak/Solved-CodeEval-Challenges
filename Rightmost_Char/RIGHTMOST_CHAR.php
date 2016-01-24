<?php

//$fh = file($argv[1]); //read all file in massive
$fh = file ('c:\1.txt');
 
foreach ($fh as $line) {
    $line = trim($line);
    if (strlen($line) === 0) {
        continue;
    }

    list($string, $letter) = explode(',', $line);
    $pos = strrpos($string, $letter);
    if ($pos === false) {
        $pos = -1;
    }
    echo $pos . "\n";
}



?>