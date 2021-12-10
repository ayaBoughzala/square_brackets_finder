<?php
$filename = './sample.txt';
$f = fopen($filename, 'r');

if ($f) {
    $contents = fread($f, filesize($filename));
    $str = "lorem ipsum [lorem ipsum]lorem ipsum[[[[lorem ipsum]]";
$pattern = "/[*]/i";
echo preg_match($pattern, $contents); 
    fclose($f);
   
}

?>
