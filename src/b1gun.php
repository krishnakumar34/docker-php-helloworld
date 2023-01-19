<?php
$cid=$_GET['c']; 
//$ch=$_GET['ch']; 
//$p = $_GET['p']; 
$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Referer: http://cdn123.iptv-mag.com/c/\r\n" .
"Cookie:mac=00:1a:79:48:e9:56;stb_lang=en;timezone=Europe%2FParis\r\n" .
"Accept: */*\r\n".
"Host: cdn123.iptv-mag.com:-1\r\n".
"Connection: Keep-Alive\r\n"
    ]
];
$urlshake="http://cdn123.iptv-mag.com:80/portal.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml";
$context = stream_context_create($opts);
$haystack = file_get_contents($urlshake,false,$context);
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
"Referer:http://cdn123.iptv-mag.com/c/\r\n".
"Cookie:mac=00:1a:79:48:e9:56;stb_lang=en;timezone=Europe%2FParis\r\n".
"Accept: */*\r\n".
"Authorization:Bearer $token\r\n".
"Host: cdn123.iptv-mag.com:-1\r\n".
"Connection: Keep-Alive\r\n"
    ]
];

$opts2 = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Referer:http://cdn123.iptv-mag.com/c/\r\n".
"Cookie:mac=00:1a:79:48:e9:56;stb_lang=en;timezone=Europe%2FParis\r\n".
"Accept: */*\r\n".
"Authorization:Bearer $token\r\n".
"Host: cdn123.iptv-mag.com:-1\r\n".
"Connection: Keep-Alive\r\n"
    ]
];
$t=time();
$urlpf="http://cdn123.iptv-mag.com:80/portal.php?&action=get_profile&mac=00%3A1a%3A79%3A48%3Ae9%3A56&type=stb&hd=1&sn=&stb_type=MAG250&client_type=STB&image_version=218&device_id=&hw_version=1.7-BD-00&hw_version_2=1.7-BD-00&timestamp=$t&auth_second_step=1&video_out=hdmi&num_banks=2&metrics=%7B%22mac%22%3A%2200%3A1a%3A79%3A48%3Ae9%3A56%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22null%22%7D&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.6.1%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566";
#$urlpf="http://92.204.40.153:80/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=1CEAFA6E767FC&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=1ceafa6e767fc866f57169f93630a107&timestamp=$t&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A47%3A69%3A85%22%2C%22sn%22%3A%221CEAFA6E767FC%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random8b95b22666336e10a0fef55d6d0668f787e25ee3&JsHttpRequest=1-xml";
//echo $urlch;

//if(!file_exists($cache)){
////
$context2 = stream_context_create($opts2);
$haystack2=file_get_contents($urlpf,false,$context2);
//echo var_dump($haystack1);
$json2 = json_decode($haystack2, true);


$s="_";
$urlch="http://cdn123.iptv-mag.com:80/portal.php?type=itv&action=create_link&forced_storage=undefined&download=0&cmd=ffmpeg%20http%3A%2F%2Flocalhost%2Fch%2F$cid$s";
#$urlch="http://b1g.one:80/server/load.php?type=itv&action=create_link&cmd=ffmpeg%20http%3A%2F%2Flocalhost%2Fch%2F$cid$s&JsHttpRequest=1-xml";

#$urlch="http://b1g.one/c/portal.php?type=itv&action=create_link&forced_storage=undefined&download=0&cmd=ffmpeg%20http://localhost/ch/$cid$s";
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
//echo "m3ulink".var_dump($data);
$m3unew=str_replace('ffmpeg', '',$data);
//$m3unew = preg_replace('/play_token.*/', '', $m3unew);

//$m3unew=str_replace('ts&', 'ts',$m3unew);
//echo $posted;
//echo "value".$m3unew;
header("Location:$m3unew");
?>;