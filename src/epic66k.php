<?php
$cid=$_GET['c']; 
//$ch=$_GET['ch']; 
//$p = $_GET['p']; 
$opts = [
    "http" => [
        "method" => "GET",
       "header" => "Cookie: mac=00:1A:79:00:00:01\r\n".
"User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG660 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Host: 66.epiciptv.com:88\r\n"
    ]
];
	
$context = stream_context_create($opts);
//$urltk="http://line.sohakiller.net/stalker_portal/server/load.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml";

$urltk="http://66.epiciptv.com:88/stalker_portal/server/load.php?type=stb&action=handshake&token=";
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
        "header" => "Cookie: mac=00:1A:79:00:00:01\r\n".
"User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG660 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Authorization:Bearer $token\r\n" .
"Host: 66.epiciptv.com:88\r\n"
    ]
];
$opts2 = [
    "http" => [
        "method" => "GET",
        "header" => "Cookie: mac=00:1A:79:00:00:01\r\n".
"User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG660 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Authorization:Bearer $token\r\n" .
"Host: 66.epiciptv.com:88\r\n"
    ]
];

$s="_";
$t=time();
$urlpf="http://66.epiciptv.com:88/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=306F5BD82D720&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=306f5bd82d72037250d742816b1499e4&timestamp=1728553041&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A00%3A00%3A01%22%2C%22sn%22%3A%22306F5BD82D720%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%221db4463061afd73d9251aca012aba921%22%7D&JsHttpRequest=1-xml";
//$urlpf="http://66.epiciptv.com:88/stalker_portal/server/load.php?type=stb&action=get_profile&device_id=&device_id2=&auth_second_step=1&metrics=%7B%22mac%22%3A%2660%3A1a%3A79%3A00%3A00%3A01%22%7D&hw_version_2=d6b3eba9bdc7fb3858d07cdcaa7a27ed8b10ecc6";
//echo $urlpf;
//$urlpf="http://line.sohakiller.net/stalker_portal/server/load.php?&action=get_profile&random=199b04c5a44ec9ccc2fffe5fc2cdd3b9de1ffc06&mac=00%3A1a%3A79%3A00%3A00%3A88&type=stb&hd=1&sn=&stb_type=MAG250&client_type=STB&image_version=218&device_id=&hw_version=1.7-BD-00&timestamp=$&thw_version_2=1.7-BD-00&auth_second_step=1&video_out=hdmi&num_banks=2&metrics=%7B%22mac%22%3A%2660%3A1a%3A79%3A00%3A00%3A88%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22199b04c5a44ec9ccc2fffe5fc2cdd3b9de1ffc06%22%7D&ver=ImageDescription%3A%660.2.18-r14-pub-250%3B%66ImageDate%3A%66Fri%66Jan%6615%6615%3A66%3A44%66EET%666616%3B%66PORTAL%66version%3A%665.6.1%3B%66API%66Version%3A%66JS%66API%66version%3A%66328%3B%66STB%66API%66version%3A%66134%3B%66Player%66Engine%66version%3A%660x566";
//$urlpf="http://line.sohakiller.net/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%660.2.18-r14-pub-250%3B%66ImageDate%3A%66Fri%66Jan%6615%6615%3A66%3A44%66EET%666616%3B%66PORTAL%66version%3A%665.1.0%3B%66API%66Version%3A%66JS%66API%66version%3A%66328%3B%66STB%66API%66version%3A%66134%3B%66Player%66Engine%66version%3A%660x566&num_banks=2&sn=1AAA2EF393BED&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=1aaa2ef393bed90827c8d93d11bda392&timestamp=$t&api_signature=263&metrics=%7B%22mac%22%3A%2660%3A1A%3A79%3A00%3A00%3A88%22%2C%22sn%22%3A%221AAA2EF393BED%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%2225b7477574eeec87486783efbd490c41%22%7D&JsHttpRequest=1-xml";
//$urlpf="http://line.sohakiller.net/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%660.2.18-r14-pub-250%3B%66ImageDate%3A%66Fri%66Jan%6615%6615%3A66%3A44%66EET%666616%3B%66PORTAL%66version%3A%665.1.0%3B%66API%66Version%3A%66JS%66API%66version%3A%66328%3B%66STB%66API%66version%3A%66134%3B%66Player%66Engine%66version%3A%660x566&num_banks=2&sn=E125C77287C0B&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=e125c77287c0b7b072ed2a734545b268&timestamp=$t&api_signature=263&metrics=%7B%22mac%22%3A%2660%3A1A%3A79%3A32%3AFE%3A6E%22%2C%22sn%22%3A%22E125C77287C0B%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22b8e63fb7dfd0ec4ee9a2ec188d76769f%22%7D&JsHttpRequest=1-xml";
//echo $urlch;

//if(!file_exists($cache)){
////
$context1 = stream_context_create($opts1);
$haystack1=file_get_contents($urlpf,false,$context1);
//echo var_dump($haystack1);
$json1 = json_decode($haystack1, true);
$jk="_";
$urlch="http://66.epiciptv.com:88/stalker_portal/server/load.php?type=itv&action=create_link&cmd=ffrt%66http%3A%2F%2Flocalhost%2Fch%2F$cid";
//$urlch="http://66.epiciptv.com:88/stalker_portal/server/load.php?type=itv&action=get_ordered_list&genre=480";

//$urlch="http://line.sohakiller.net/stalker_portal/server/load.php?type=itv&action=create_link&cmd=ffrt%66http%3A%2F%2Flocalhost%2Fch%2F$cid&JsHttpRequest=1-xml";
//$urlch="http://tv.indigotv.me:80/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%660.2.18-r14-pub-250%3B%66ImageDate%3A%66Fri%66Jan%6615%6615%3A66%3A44%66EET%666616%3B%66PORTAL%66version%3A%665.1.0%3B%66API%66Version%3A%66JS%66API%66version%3A%66328%3B%66STB%66API%66version%3A%66134%3B%66Player%66Engine%66version%3A%660x566&num_banks=2&sn=23649D9B04350&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=23649d9b04350f116e306a0b598a798a&timestamp=1654751966&api_signature=263&metrics=%7B%22mac%22%3A%2660%3A1A%3A79%3A00%3A11%3A9C%22%2C%22sn%22%3A%2223649D9B04350%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22b8c4a85457c1cf44af6dc5ab06b64a27%22%7D&JsHttpRequest=1-xml";
//echo $urlch;

//if(!file_exists($cache)){
////
$context2 = stream_context_create($opts2);
$haystack2=file_get_contents($urlch,false,$context1);
//echo var_dump($haystack2);
$json2 = json_decode($haystack2, true);
//echo var_dump($json2);
$id='4548';
$data=$json2['js']['cmd'];
//echo $json2['js']['name'];
//echo $data;
$uagent="|User-Agent=REDLINECLIENT";
//$data="$data$uagent";
//echo $data;
//$m3u=$json['js']['data'][$ch]['cmd'];
//echo "values".var_dump($m3u);
//$m3u=$data[0];
//echo "m3ulink".var_dump($m3u)
$data=str_replace('https', 'http',$data);
//echo "value".$data;
//$data=explode("?",$data)[0];
header("Location:$data");
?>;