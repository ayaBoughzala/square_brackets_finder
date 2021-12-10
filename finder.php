<?php
$filename = './sample.txt';
$f = fopen($filename, 'r');

if ($f) {
    $contents = fread($f, filesize($filename));
   
    $pattern = "/[*]/i";
    if (preg_match($pattern, $contents, $match))
       {for ($x = 0; $x <= count($match); $x++) {
             echo "$match[$x]\n";
       }
     }
    fclose($f);
   
}

?>
