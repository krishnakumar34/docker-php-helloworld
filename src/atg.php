<?php

$cid=$_GET['c'];

$ch=$_GET['ch'];

$p = $_GET['p'];

$opts = [

    "http" => [

         "method" => "GET",
"header"=>"Cookie:mac=00:1A:79:AD:F2:91; stb_lang=en; timezone=Asia%2FKolkata;\r\n" .

"Accept: */*\r\n".
"User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"Referer: http://atg100.xyz/c/\r\n" .
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Host: atg100.xyz\r\n"

    ]

];

  

$context = stream_context_create($opts);
//http://atg100.xyz/portalott.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml
//$urltk="http://atg100.xyz/portalott.php?type=stb&action=handshake&token=&JshttpRequest=1-xml";


$urltk="http://atg100.xyz:80/portalott.php?type=stb&action=handshake&token=&prehash=9c42ac937c6bc42ba21b45b853bfc020b013f8f6&JsHttpRequest=1-xml";

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
"header"=>"Cookie:mac=00:1A:79:AD:F2:91; stb_lang=en; timezone=Asia%2FKolkata;\r\n" .
"Authorization:Bearer $token\r\n".
"Accept: */*\r\n".
"User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"Referer: http://atg100.xyz/c/\r\n" .
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Host: atg100.xyz\r\n"

    ]

];

$opts2 = [
"http" => [


"method" => "GET",
"header"=>"Cookie:mac=00:1A:79:AD:F2:91; stb_lang=en; timezone=Asia%2FKolkata;\r\n" .
"Authorization:Bearer $token\r\n".
"Accept: */*\r\n".
"User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"Referer: http://atg100.xyz/c/\r\n" .
"X-User-Agent: Model: MAG250; Link: WiFi\r\n".
"Host: atg100.xyz\r\n"
]

];



$s="_";

$t=time();

//$urlpf
$urlpf="http://atg100.xyz:80/portalott.php?type=stb&action=get_profile&hd=1&ver=ImageDescription:%200.2.18-r14-pub-250;%20ImageDate:%20Fri%20Jan%2015%2015:20:44%20EET%202016;%20PORTAL%20version:%205.3.1;%20API%20Version:%20JS%20API%20version:%20328;%20STB%20API%20version:%20134;%20Player%20Engine%20version:%200x566&num_banks=2&sn=&stb_type=MAG250&client_type=STB&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=0&hw_version=1.7-BD-00&not_valid_token=0&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3AAD%3AF2%3A91%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22%22%7D&hw_version_2=60e78fc8953a2ec27f1f4e11ba675bfe56e58565&timestamp=$t&api_signature=261&prehash=9c42ac937c6bc42ba21b45b853bfc020b013f8f6&JsHttpRequest=1-xml";
//$urlpf="http://atg100.xyz/portalott.php?type=stb&action=get_profile&device_id=&device_id2=&auth_second_step=1&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3AAD%3AF2%3A91%22%7D&hw_version_2=d6b3eba9bdc7fb3858d07cdcaa7a27ed8b10ecc6";

//$urlpf="http://atg100.xyz:80/stalker_portal/server/load.php?type=stb&action=get_profile&device_id=&device_id2=&auth_second_step=1&metrics=%7B%22mac%22%3A%2200%3A1a%3A79%3A00%3A00%3A88%22%7D&hw_version_2=d6b3eba9bdc7fb3858d07cdcaa7a27ed8b10ecc6";

//$urlpf="http://atg100.xyz:80/stalker_portal/server/load.php?&action=get_profile&random=199b04c5a44ec9ccc2fffe5fc2cdd3b9de1ffc06&mac=00%3A1a%3A79%3A00%3A00%3A88&type=stb&hd=1&sn=&stb_type=MAG250&client_type=STB&image_version=218&device_id=&hw_version=1.7-BD-00&timestamp=$&thw_version_2=1.7-BD-00&auth_second_step=1&video_out=hdmi&num_banks=2&metrics=%7B%22mac%22%3A%2200%3A1a%3A79%3A00%3A00%3A88%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22199b04c5a44ec9ccc2fffe5fc2cdd3b9de1ffc06%22%7D&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.6.1%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566";

//$urlpf="http://atg100.xyz:80/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=1AAA2EF393BED&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=1aaa2ef393bed90827c8d93d11bda392&timestamp=$t&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A00%3A00%3A88%22%2C%22sn%22%3A%221AAA2EF393BED%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%2225b7477574eeec87486783efbd490c41%22%7D&JshttpRequest=1-xml";

//$urlpf="http://atg100.xyz:80/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=E125C77287C0B&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=e125c77287c0b7b072ed2a734545b268&timestamp=$t&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A32%3AFE%3A6E%22%2C%22sn%22%3A%22E125C77287C0B%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22b8e63fb7dfd0ec4ee9a2ec188d76769f%22%7D&JshttpRequest=1-xml";

//echo $urlch;



//if(!file_exists($cache)){

////

$context1 = stream_context_create($opts1);

$haystack1=file_get_contents($urlpf,false,$context1);

//echo var_dump($haystack1);

$json1 = json_decode($haystack1, true);


//echo "#EXTM3U";
//for($j=0;$j<=7;++$j){
$urlch="http://atg100.xyz:80/portalott.php?type=itv&action=get_ordered_list&genre=$cid&force_ch_link_check=&fav=0&sortby=number&hd=0&p=$p&JsHttpRequest=1-xml&from_ch_id=0";
//$urlch="http://atg100.xyz:80/portalott.php?type=itv&action=get_all_channels&force_ch_link_check=&JsHttpRequest=1-xml";
//$urlch="http://atg100.xyz/portalott.php?type=itv&action=get_genres&JsHttpRequest=1-xml";
//$urlch="http://atg100.xyz:80/portalott?type=itv&action=create_link&cmd=ffrt%20http%3A%2F%2Flocalhost%2Fch%2F$cid&JshttpRequest=1-xml";

//$urlch="http://tv.indigotv.me:80/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=23649D9B04350&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=23649d9b04350f116e306a0b598a798a&timestamp=1654751966&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A00%3A11%3A9C%22%2C%22sn%22%3A%2223649D9B04350%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22b8c4a85457c1cf44af6dc5ab06b64a27%22%7D&JshttpRequest=1-xml";

//echo $urlch;



//if(!file_exists($cache)){

////

$context2 = stream_context_create($opts2);

$haystack2=file_get_contents($urlch,false,$context2);

//echo var_dump($haystack2);

$json2 = json_decode($haystack2, true);

//$id='4548';

$data=$json2['js']['data'][$ch]['cmd'];
//echo $data;

#$data=$data | "User-Agent=Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3";

//$m3u=$json['js']['data'][$ch]['cmd'];
//$data=$json['js']['data'];



//$keys = array_keys($data);



//$m3u="";



//echo "#EXTM3U";



//echo "<br>";



//for($i=0; $i <count($keys); ++$i) {



//echo"keys". $json[$i]["link"] ;

//$url ="http://tarunmm.alwaysdata.net/linebeasep25.php?c=$cid&ch=$i&p=$j";


//$url="https://krtv.vercel.app/api/siderapr24.php?c=$cid&ch=$i&p=$j";

//echo "#EXTINF:-1," .$data[$i]["name"];



//echo "<br>";



//echo "#EXTVLCOPT:http-user-agent=VLC/3.0.16 LibVLC/3.0.16";



//echo " <br>";



//echo $url;



//echo "<br>";





 





//}



//}
//echo "values".var_dump($m3u);

//$m3u=$data[0];

//echo "m3ulink".var_dump($m3u);

$m3unew=str_replace('ffmpeg', '',$data);

//echo "value".$data;
$m3u=ltrim($m3unew);
//$m3ukk="http://sympathetic-rianon-personalkk-b701f149.koyeb.app/$m3u";
header("Location:$m3u");

?>
