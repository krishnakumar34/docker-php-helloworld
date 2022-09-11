<?php
$cid=$_GET['c']; 
//$ch=$_GET['ch']; 
//$p = $_GET['p']; 
$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Referer: http://infusumtv.co.uk:8880/c/\r\n" .
"Cookie:mac=00:1A:79:A7:7F:89;stb_lang=en;timezone=Europe%2FParis\r\n" .
"Accept: */*\r\n".
"Host: infusumtv.co.uk:8880\r\n".
"Connection: Keep-Alive\r\n"
    ]
];
	
$context = stream_context_create($opts);
$haystack = file_get_contents("http://infusumtv.co.uk:8880/c/portal.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml",false,$context);
//echo $haystack;
$json = json_decode($haystack, true);
$id='4548';
//echo var_dump($json);
$token=$json['js']['token'];
//echo $token;
$opts1 = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Referer:http://infusumtv.co.uk:8880/c/\r\n".
"Cookie:mac=00:1A:79:A7:7F:89;stb_lang=en;timezone=Europe%2FParis\r\n".
"Accept: */*\r\n".
"Authorization:Bearer $token\r\n".
"Host: infusumtv.co.uk:8880\r\n".
"Connection: Keep-Alive\r\n"
    ]
];

$s="_";


$urlch="http://infusumtv.co.uk:8880/c/portal.php?type=itv&action=create_link&forced_storage=undefined&download=0&cmd=ffmpeg%20http://localhost/ch/$cid$s";
//echo $urlch;

//if(!file_exists($cache)){
////
$context1 = stream_context_create($opts1);
$haystack1=file_get_contents($urlch,false,$context1);
//echo var_dump($haystack1);
$json1 = json_decode($haystack1, true);
$id='4548';
$data=$json1['js']['cmd'];
//$m3u=$json['js']['data'][$ch]['cmd'];
//echo "values".var_dump($m3u);
//$m3u=$data[0];
//echo "m3ulink".var_dump($m3u);
$m3unew=str_replace('ffmpeg', '',$data);
//$m3unew=str_replace('&play_token
$m3unew = preg_replace('/play_token.*/', '', $m3unew);
$m3unew=str_replace('ts&', 'ts',$m3unew);
//echo $posted;
//echo "value".$m3unew;
header("Location:$m3unew");
?>;