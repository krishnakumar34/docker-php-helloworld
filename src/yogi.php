<?php

$cid=$_GET['c']; 

//$p = $_GET['p']; 

$url1="https://vembx.one/$cid.html";

//echo $url1;

//call api

//$jsonvalues = file_get_contents($url1);

//echo "results1" .$jsonvalues;

//echo "objecttype".gettype($jsonvalues);

$ch = curl_init();
$config['useragent'] = 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0';

curl_setopt($ch, CURLOPT_USERAGENT, $config['useragent']);


curl_setopt($ch, CURLOPT_URL, $url1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array( "Content-Type: application/json" ));

curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 11; motorola one fusion+ Build/RPIS31.Q2-42-25-3; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/94.0.4606.85 Mobile Safari/537.36");

$response = curl_exec($ch);

//echo "result".var_dump($response);

$json = json_encode($response, true);

//echo "result3".var_dump($json);

preg_match("/file:(.*)\m3u8/", $json,$results) ;

//echo "result4".var_dump($results[0]);

$data=$results[0];

$m3unew=str_replace('\\' , '',$results[0]);

$m3u=str_replace('file:' , '',$m3unew);

$m3u= trim($m3u, '"');

$hostkk=explode('/',$m3u)[2];
$ip = gethostbyname($hostkk);
//echo $ip
$m3une=str_replace($hostkk,$ip,$m3u);
//echo $m3unew;
//echo file_get_contents($m3une);
header("Location: $m3une");

//die();

?>
