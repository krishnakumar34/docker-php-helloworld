<?php

$cid=$_GET['c']; 

//$ch=$_GET['ch']; 

//$p = $_GET['p']; 
$url="https://kk.ramkumarmj.repl.co/hello/$cid";
$m3u=file_get_contents($url);

//echo var_dump($haystack1);
header("Location:$m3u");
?>;
