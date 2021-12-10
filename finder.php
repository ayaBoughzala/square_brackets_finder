<?php
$filename = './sample.txt';
$f = fopen($filename, 'r');

if ($f) {
    $contents = fread($f, filesize($filename));
   
    $pattern = "/[*]/i";
    echo preg_match($pattern, $contents); 
    fclose($f);
   
}

?>
