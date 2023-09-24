<?php
$cid=$_GET['c']; 
$ch=$_GET['ch']; 
$p = $_GET['p']; 
	$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
		"X-User-Agent: Model: MAG250; Link: WiFi\r\n" .
"Referer: http://line.crystal-ott.com:80/c/\r\n" .
"Cookie: mac=00:1A:79:1A:00:10;stb_lang=en; timezone=GMT\r\n" .
"Accept: */*\r\n".
"Authorization:Bearer:090D73C116B9AC45CB0FB0DF99A7DBCF"

    ]
];


//$cache=str_replace("/","_",$_REQUEST["key"]);

//if(!file_exists($cache)){

$context = stream_context_create($opts);
$haystack = file_get_contents("http://line.crystal-ott.com:80/server/load.php?type=itv&action=get_ordered_list&genre=$cid&p=$p",false,$context);
//echo $haystack;
$json = json_decode($haystack, true);
$id='4548';
$data=$json['js']['data'];
$m3u=$json['js']['data'][$ch]['cmd'];
//echo "values".var_dump($m3u);
//$m3u=$data[0];
//echo "m3ulink".var_dump($m3u);
$m3unew=str_replace('ffmpeg', '',$m3u);
//echo "value".$m3unew;
header("Location:$m3unew");
?>