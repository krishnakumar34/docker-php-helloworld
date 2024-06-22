<?php
$cid=$_GET['c']; 
$ch=$_GET['ch']; 
$p = $_GET['p']; 

$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"Referrer: http://sansatplus.net:25461/c/\r\n".
"X-User-Agent: Model: MAG254; Link: WiFi\r\n".
"Cache-Control: no-cache\r\n".
"Host: sansatplus.net:-1\r\n".
"Cookie: mac=00:1A:79:4A:F0:24;stb_lang=en; timezone=Europe%2FParis \r\n" .
"Connection: Keep-Alive/\r\n"
    ]
];
	//echo "test";
$context = stream_context_create($opts);
$haystack = file_get_contents("http://eljawda.net:88/portal.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml",false,$context);
//echo $haystack;
$json = json_decode($haystack, true);
$id='4548';
//echo var_dump($json);
$token=$json['js']['token'];
//echo $token;

$opts1 = [
    "http" => [
        "method" => "GET",
        "header" => "Accept:/\r\n".
"User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"Referrer: http://sansatplus.net:25461/c/\r\n".
"Accept-Language: en-US,*\r\n".
"Accept-Charset: UTF-8,*;q=0.8\r\n".
"X-User-Agent: Model: MAG254; Link: WiFi\r\n".
"Authorization: Bearer $token\r\n".
"Host: sansatplus.net:-1\r\n".
"Cookie: mac=00:1A:79:4A:F0:24;stb_lang=en;timezone=Europe%2FParis \r\n".
"Connection:Keep-Alive\r\n"
    ]
];

$opts2 = [
    "http" => [
        "method" => "GET",
        "header" => "Accept:/\r\n".
"User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"Referrer: http://sansatplus.net:25461/c/\r\n".
"Accept-Language: en-US,*\r\n".
"Accept-Charset: UTF-8,*;q=0.8\r\n".
"X-User-Agent: Model: MAG254; Link: WiFi\r\n".
"Authorization: Bearer $token\r\n".
"Host:sansatplus.net:-1\r\n".
"Cookie: mac=00:1A:79:4A:F0:24;stb_lang=en;timezone=Europe%2FParis \r\n".
"Connection:Keep-Alive\r\n"
    ]
];
$t=time();
$urlpf="http://sansatplus.net:25461/portal.php?&action=get_profile&mac=00%3A1a%3A79%3A4A%3AF0%3A24&type=stb&hd=1&sn=&stb_type=MAG250&client_type=STB&image_version=218&device_id=&hw_version=1.7-BD-00&hw_version_2=1.7-BD-00&auth_second_step=1&timestamp=$t&video_out=hdmi&num_banks=2&metrics=%7B%22mac%22%3A%2200%3A1a%3A79%3A4A%3AF0%3A24%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22null%22%7D&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.6.1%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566";
//$urlpf="http://eljawda.net:88/portal.php?&action=get_profile&mac=00%3A1a%3A79%3Aa8%3Afa%3A57&type=stb&hd=1&sn=&stb_type=MAG254&client_type=STB&image_version=218&device_id=&hw_version=1.7-BD-00&hw_version_2=1.7-BD-00&auth_second_step=1&video_out=hdmi&num_banks=2&metrics=%7B%22mac%22%3A%2200%3A1a%3A79%3Aa8%3Afa%3A57%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG254%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22null%22%7D&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.6.1%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566";



$context1 = stream_context_create($opts1);
$haystack1=file_get_contents($urlpf,false,$context1);
//echo var_dump($haystack1);
$json1 = json_decode($haystack1, true);
$pf2="http://sansatplus.net:25461/portal.php?type=stb&action=get_profile&JsHttpRequest=1-xml&hd=1&num_banks=2&not_valid_token=0&auth_second_step=0&timestamp=$t&video_out=hdmi&client_type=STB&metrics=%7B%22mac%22%3A%2200%3A1a%3A79%3A4A%3AF0%3A24%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG254%22%2C%22type%22%3A%22stb%22%2C%22uid%22%3A%22%22%7D";
//$pf2="http://eljawda.net:88/portal.php?type=stb&action=get_profile&JsHttpRequest=1-xml&hd=1&num_banks=2&not_valid_token=0&auth_second_step=0&timestamp=$t&video_out=hdmi&client_type=STB&metrics=%7B%22mac%22%3A%2200%3A1a%3A79%3Aa8%3Afa%3A57%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG254%22%2C%22type%22%3A%22stb%22%2C%22uid%22%3A%22%22%7D";

$context3 = stream_context_create($opts1);
$haystack3=file_get_contents($pf2,false,$context1);
//echo var_dump($haystack3);
$json3= json_decode($haystack3, true);



//$cache=str_replace("/","_",$_REQUEST["key"]);

//if(!file_exists($cache)){
$s="_";
$allch="http://sansatplus.net:25461/portal.php?type=itv&action=get_ordered_list&genre=$cid&p=$p";
//$allch="http://eljawda.net:88/portal.php?type=itv&action=create_link&forced_storage=undefined&download=0&cmd=ffmpeg%20http%3A%2F%2Flocalhost%2Fch%2F$cid$s";
//$allch="http://eljawda.net:88/portal.php?type=itv&action=get_all_channels";
//$tvcgg="http://eljawda.net:88/portal.php?type=itv&action=get_ordered_list&genre=$cid&p=$p";
$context2 = stream_context_create($opts2);
$haystack2= file_get_contents($allch,false,$context2);
//$haystack2=file_get_contents("http://eljawda.net:88/portal.php?type=itv&action=get_genres",false,$context2);
//echo $haystack2;
$json2 = json_decode($haystack2, true);

//echo var_dump($json1);

$id='4548';

$data=$json2['js']['data'];

$m3u=$json2['js']['data'][$ch]['cmd'];

//echo "values".var_dump($m3u);

//$m3u=$data[0];


//echo "m3ulink".var_dump($m3u);

$m3unew=str_replace('ffmpeg', '',$m3u);
$m3u=ltrim($m3unew);
//echo $m3u;
$m3ukk="https://corsnow3-pg5c2fch.b4a.run/$m3u";
//echo "value".$m3ukk;
header("Location:$m3ukk");
?>
