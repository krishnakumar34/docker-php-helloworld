<?php
$cid=$_GET['c']; 
$ch=$_GET['ch']; 
$p = $_GET['p']; 
$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
		"X-User-Agent: Model: MAG250; Link: WiFi\r\n" .
"Cache-Control: no-cache\r\n".
"Referrer: http://line.crystalott.co/c/\r\n" .
"Cookie: mac=00:1A:79:79:83:a0;stb_lang=en; timezone=GMT\r\n" .
"Accept: */*\r\n"
    ]
];
$context = stream_context_create($opts);



$urltk="http://line.crystalott.co:80/server/load.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml";



$haystack = file_get_contents($urltk,false,$context);



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

		"X-User-Agent: Model: MAG250; Link: WiFi\r\n" .

"Cache-Control: no-cache\r\n".

"Referrer: http://line.crystalott.co/c/\r\n" .

"Cookie: mac=00:1A:79:79:83:a0;stb_lang=en; timezone=GMT\r\n" .

"Accept: */*\r\n"
.
"Authorization:Bearer:$token\r\n"
    ]

];

$context1 = stream_context_create($opts1);







$urlpf="http://line.crystalott.co:80/server/load.php?&action=get_profile&mac=00%3A1A%3A79%3A79%3A83%3Aa0&type=stb&hd=1&sn=&stb_type=MAG250&client_type=STB&image_version=218&device_id=&hw_version=1.7-BD-00&hw_version_2=1.7-BD-00&auth_second_step=1&video_out=hdmi&num_banks=2&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A79%3A83%3Aa0%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22null%22%7D&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.6.1%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566";







$haystack2 = file_get_contents($urlpf,false,$context1);







//echo $haystack2;







$json2 = json_decode($haystack2, true);


//echo var_dump($json2);




$id='4548';







//echo var_dump($json);







//$token=$json['js']['token'];


	$opts2 = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
		"X-User-Agent: Model: MAG250; Link: WiFi\r\n" .
"Referer: http://line.crystalott.co:80/c/\r\n" .
"Cookie: mac=00:1A:79:79:83:a0;stb_lang=en; timezone=GMT\r\n" .
"Accept: */*\r\n".
"Authorization:Bearer:$token"

    ]
];


//$cache=str_replace("/","_",$_REQUEST["key"]);

//if(!file_exists($cache)){

$context = stream_context_create($opts2);
$haystack = file_get_contents("http://line.crystalott.co:80/server/load.php?type=itv&action=get_ordered_list&genre=$cid&p=$p",false,$context);
//echo $haystack;
$json = json_decode($haystack, true);
$id='4548';
$data=$json['js']['data'];
$m3u=$json['js']['data'][$ch]['cmd'];
//echo "values".var_dump($m3u);
//$m3u=$data[0];
//echo "m3ulink".var_dump($m3u);
$m3unew=str_replace('ffmpeg', '',$m3u);
header("Location:$m3unew");
?>
