<?php
$cid=$_GET['c']; 
//$ch=$_GET['ch']; 
//$p = $_GET['p']; 
$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Referer:http://p1.uiop.tv/stalker_portal/c/\r\n" .
"Cookie: mac=00:1A:79:7A:CB:6C; stb_lang=en; timezone=GMT\r\n" .
"Accept: */*\r\n".
"Host: p1.uiop.tv\r\n"
    ]
];
	
$context = stream_context_create($opts);
$urltk="http://p1.uiop.tv:80/stalker_portal/server/load.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml";
//$urltk="http://62.210.189.101:80/stalker_portal/server/load.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml";
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
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Referer: http://p1.uiop.tv/stalker_portal/c/\r\n" .
"Cookie:mac=00:1A:79:7A:CB:6C; stb_lang=en; timezone=GMT\r\n" .
"Accept: */*\r\n".
"Authorization:Bearer $token\r\n".
"Host: p1.uiop.tv\r\n"
    ]
];
$opts2 = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Referer:http://p1.uiop.tv/stalker_portal/c/\r\n" .
"Cookie:mac=00:1A:79:7A:CB:6C; stb_lang=en; timezone=GMT\r\n" .
"Accept: */*\r\n".
"Authorization:Bearer $token\r\n".
"Host: p1.uiop.tv\r\n"
    ]
];
$s="_";
$t=time();
$urlpf="http://51.159.98.118:80/stalker_portal/server/load.php?&action=get_profile&random=fdf126d9961ed9cee8ed031fdbf66a8ab4da8063&mac=00%3A1A%3A79%3A7A%3ACB%3A6C&type=stb&hd=1&sn=&stb_type=MAG250&client_type=STB&image_version=218&device_id=&hw_version=1.7-BD-00&hw_version_2=1.7-BD-00&auth_second_step=1&video_out=hdmi&num_banks=2&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A7A%3ACB%3A6C%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22fdf126d9961ed9cee8ed031fdbf66a8ab4da8063%22%7D&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.6.1%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566";

//$urlpf="http://51.159.98.118:80/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=A1A693C89BF43&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=7C8793985E39E47797DE897DCBEC6404510CAE7BDB7CB643CF328D080A113D40&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=a1a693c89bf43bf8372ad8ee49f7aa00&timestamp=$t&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A7A%3ACB%3A6C%22%2C%22sn%22%3A%22A1A693C89BF43%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22eeb82e585657b5b89cd6fcb0cd511e4c%22%7D&JsHttpRequest=1-xml";
//$urlpf="http://51.159.98.118:80/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=0971A4F39EFA3&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=513264655A29A22967DF25A3638020B40C30B6EEC4372ED7E8D2DDA1EAEEFBA6&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=0971a4f39efa35dc59308c6a2ca2e55d&timestamp=$t&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A7A%3A77%3A0B%22%2C%22sn%22%3A%220971A4F39EFA3%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22ce32d86d79af5a0737fc47bd1490307e%22%7D&JsHttpRequest=1-xml";
//$urlpf="http://62.210.189.101:80/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=EC17F7F4E4A2D&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=ec17f7f4e4a2d03109b26ca9539acd48&timestamp=$t&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A33%3A10%3AEA%22%2C%22sn%22%3A%22EC17F7F4E4A2D%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%228c7b0be9fdebeaa53f83fbb29068ee46%22%7D&JsHttpRequest=1-xml";
//$urlpf="http://62.210.189.101:80/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=FBE3A12938F68&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=fbe3a12938f6891ea6b3d69075c0cb1d&timestamp=$t&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A6C%3A1F%3A2A%22%2C%22sn%22%3A%22FBE3A12938F68%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22222e0feab427fb511c15b7b793384c20%22%7D&JsHttpRequest=1-xml";
//$urlpf="http://62.210.189.101:80/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=1CEAFA6E767FC&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=1ceafa6e767fc866f57169f93630a107&timestamp=$t&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A47%3A69%3A85%22%2C%22sn%22%3A%221CEAFA6E767FC%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random8b95b22666336e10a0fef55d6d0668f787e25ee3&JsHttpRequest=1-xml";
//echo $urlch;

//if(!file_exists($cache)){
////
$context1 = stream_context_create($opts1);
$haystack1=file_get_contents($urlpf,false,$context1);
//echo var_dump($haystack1);
$json1 = json_decode($haystack1, true);

//$urlch="http://62.210.189.101:80/stalker_portal/server/load.php?type=itv&action=get_ordered_list&genre=$cid&force_ch_link_check=&p=$p&JsHttpRequest=1-xml";
$urlch="http://p1.uiop.tv:80/stalker_portal/server/load.php?type=itv&action=create_link&cmd=ffrt%20http%3A%2F%2Flocalhost%2Fch%2F$cid&JsHttpRequest=1-xml";
//$urlch="http://62.210.189.101:80/stalker_portal/server/load.php?type=itv&action=create_link&cmd=ffrt%20http%3A%2F%2Flocalhost%2Fch%2F$cid&JsHttpRequest=1-xml";
//$urlch="http://62.210.189.101:80/stalker_portal/server/load.php?type=itv&action=create_link&cmd=ffrt%20http%3A%2F%2Flocalhost%2Fch%2F$cid&JsHttpRequest=1-xml";
//$urlch="http://tv.indigotv.me:80/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=23649D9B04350&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=23649d9b04350f116e306a0b598a798a&timestamp=1654751966&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A00%3A11%3A9C%22%2C%22sn%22%3A%2223649D9B04350%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22b8c4a85457c1cf44af6dc5ab06b64a27%22%7D&JsHttpRequest=1-xml";
//echo $urlch;

//if(!file_exists($cache)){
////
$context2 = stream_context_create($opts2);
$haystack2=file_get_contents($urlch,false,$context1);
//echo var_dump($haystack2);
$json2 = json_decode($haystack2, true);
$id='4548';
$data=$json2['js']['cmd'];
$m3url="http://cors-now.adaptable.app/$data";
//echo var_dump($data);
//$m3u=$json2['js']['data'][$ch]['cmd'];
//echo "values".var_dump($m3u);
//$m3u=$data[0];
//echo "m3ulink".var_dump($m3u);
//$m3unew=str_replace('ffmpeg', '',$m3u);
//echo "value".$m3unew;
//$data=$json2['js']['cmd'];
//echo $data;
//$data=$data | "User-Agent=Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3";
//$m3u=$json['js']['data'][$ch]['cmd'];
//echo "values".var_dump($m3u);
//$m3u=$data[0];
//echo "m3ulink".var_dump($m3u);
//$m3unew=str_replace('ffmpeg', '',$data);
//echo "value".$data;
header("Location:$m3url");
?>;
