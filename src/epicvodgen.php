<?php
//$cid=$_GET['c']; 
//$ch=$_GET['ch']; 
//$p = $_GET['p']; 
$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Referer: http://20.epiciptv.com:88/stalker_portal/c/\r\n" .
"Cookie:mac=00:1a:79:00:00:88; stb_lang=en; timezone=GMT\r\n" .
"Accept: */*\r\n".
"Host: 20.epiciptv.com:88\r\n"
    ]
];
	
$context = stream_context_create($opts);
$urltk="http://20.epiciptv.com:88/stalker_portal/server/load.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml";
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
"Referer: http://20.epiciptv.com:88/stalker_portal/c/\r\n" .
"Cookie:mac=00:1a:79:00:00:88; stb_lang=en; timezone=GMT\r\n" .
"Accept: */*\r\n".
"Authorization:Bearer $token\r\n".
"Host: 20.epiciptv.com:88\r\n"
    ]
];
$opts2 = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Referer: http://20.epiciptv.com:88/stalker_portal/c/\r\n" .
"Cookie:mac=00:1a:79:00:00:88; stb_lang=en; timezone=GMT\r\n" .
"Accept: */*\r\n".
"Authorization:Bearer $token\r\n".
"Host: 20.epiciptv.com:88\r\n"
    ]
];
$s="_";
$t=time();
$urlpf="http://20.epiciptv.com:88/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=1AAA2EF393BED&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=1aaa2ef393bed90827c8d93d11bda392&timestamp=$t&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A00%3A00%3A88%22%2C%22sn%22%3A%221AAA2EF393BED%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%2245ddb3d412a31ab3f178f5502458230c%22%7D&JsHttpRequest=1-xml";
//$urlpf="http://20.epiciptv.com:88/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=E125C77287C0B&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=e125c77287c0b7b072ed2a734545b268&timestamp=$t&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A32%3AFE%3A6E%22%2C%22sn%22%3A%22E125C77287C0B%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22b8e63fb7dfd0ec4ee9a2ec188d76769f%22%7D&JsHttpRequest=1-xml";
//echo $urlch;

//if(!file_exists($cache)){
////
$context1 = stream_context_create($opts1);
$haystack1=file_get_contents($urlpf,false,$context1);
//echo var_dump($haystack1);
$json1 = json_decode($haystack1, true);
echo "#EXTM3U";































for($j=1;$j<=178;++$j){

$urlch="http://20.epiciptv.com:88/stalker_portal/server/load.php?type=vod&action=get_ordered_list&category=19&genre=*&p=$j&JsHttpRequest=1-xml";
//echo $urlch;
//$urlchmv="http://20.epiciptv.com:88/stalker_portal/server/load.php?type=vod&action=get_ordered_list&movie_id=$cid&JsHttpRequest=1-xml";


//$urlch="http://tv.indigotv.me:80/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=23649D9B04350&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=23649d9b04350f116e306a0b598a798a&timestamp=1654751966&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A00%3A11%3A9C%22%2C%22sn%22%3A%2223649D9B04350%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22b8c4a85457c1cf44af6dc5ab06b64a27%22%7D&JsHttpRequest=1-xml";
//echo $urlch;

/*$context3 = stream_context_create($opts2);
$haystack3=file_get_contents($urlchmv,false,$context1);
//echo var_dump($haystack3);
$json3 = json_decode($haystack3, true);
//$id='4548';
$dt= $json3['js']['data'];
//echo $dt;
$id=$dt[0]['id'];
//echo $id;
$urlch="http://20.epiciptv.com:88/stalker_portal/server/load.php?type=vod&action=create_link&cmd=%2Fmedia%2Ffile_$id.mpg&series=&forced_storage=&disable_ad=0&download=0&force_ch_link_check=0&JsHttpRequest=1-xml";
*/

//if(!file_exists($cache)){
////
$context2 = stream_context_create($opts2);
$haystack2=file_get_contents($urlch,false,$context1);
//echo var_dump($haystack2);
$json2 = json_decode($haystack2, true);
$id='4548';
//$data= $json2['js']['cmd'];
$data=$json2['js']['data'];

$keys = array_keys($data); 







//$m3u="";







//echo "#EXTM3U";







echo "<br>";







for($i=0; $i <count($keys); ++$i) { 







//echo"keys". $json[$i]["link"] ;















echo "#EXTINF:-1," .$data[$i]["name"];







echo "<br>";







echo "#EXTVLCOPT:http-user-agent=Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3";







echo "<br>";







echo "https://sample2-ihle.onrender.com/epicvod23.php?c=".$data[$i]["id"];







echo "<br>";















    //printf("#EXTINF:-1," $data[$i]["name"]);







    //echo "<br>" . PHP_EOL;







   



}







}
//$m3u=$data[0]['cmd'];
//echo $data;

//$data=$data | "User-Agent=Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3";
//$m3u=$json['js']['data'][$ch]['cmd'];
//echo "values".var_dump($m3u);
//$m3u=$data[0];
//echo "m3ulink".var_dump($m3u);
//$m3unew=str_replace('ffmpeg', '',$data);
//echo "value".$data;
//header("Location:$data");
?>;