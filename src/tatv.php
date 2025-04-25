<?php

$cid=$_GET['c']; 

//$ch=$_GET['ch']; 

//$p = $_GET['p']; 




//echo $cid;

$opts = [



    "http" => [



        "method" => "GET",



        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .



"X-User-Agent: Model: MAG250; Link: WiFi\r\n".



"Referer: http://tatatv.cc/stalker_portal/c/\r\n" .



"Cookie: mac=00:1A:79:00:2D:E2; stb_lang=en; timezone=GMT\r\n" .



"Accept: */*\r\n".



"Host: tatatv.cc\r\n"



    ]



];



	

$context = stream_context_create($opts);

$urltk="http://tatatv.cc/stalker_portal/server/load.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml";

//echo $urltk;

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

"Referer: http://tatatv.cc/stalker_portal/c/\r\n" .

"Cookie:mac=00:1A:79:00:2D:E2; stb_lang=en; timezone=GMT\r\n" .

"Accept: */*\r\n".

"Authorization:Bearer $token\r\n".

"Host: tatatv.cc\r\n"

    ]

];

$opts2 = [

    "http" => [

        "method" => "GET",

        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .

"X-User-Agent: Model: MAG250; Link: WiFi\r\n".

"Referer: http://tatatv.cc/stalker_portal/c/\r\n" .

"Cookie:mac=00:1A:79:00:2D:E2; stb_lang=en; timezone=GMT\r\n" .

"Accept: */*\r\n".

"Authorization:Bearer $token\r\n".

"Host: tatatv.cc\r\n"

    ]

];

/*$opts1 = [

    "http" => [

        "method" => "GET",

        "header" =>  "Cookie:mac=00:1A:79:00:2D:E2\r\n" .

"User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .

"X-User-Agent: Model: MAG250; Link: WiFi\r\n".

"Authorization: Bearer $token\r\n".

"Host: tatatv.cc\r\n".

"Connection:Keep-Alive\r\n"

    ]

];

$opts2 = [

    "http" => [

        "method" => "GET",

        "header" =>  "Cookie:mac=00:1A:79:00:2D:E2\r\n" .

"User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .

"X-User-Agent: Model: MAG250; Link: WiFi\r\n".

"Authorization: Bearer $token\r\n".

"Host: tatatv.cc\r\n".

"Connection:Keep-Alive\r\n"

    ]

];*/

$s="_";

$t=time();

$urlpf="http://tatatv.cc:80/stalker_portal/server/load.php?type=stb&action=get_profile&device_id=7340326103379BD8FEA27B1C14A38307DA3D9B09104D3A673AE8185AB5A68728&device_id2=7340326103379BD8FEA27B1C14A38307DA3D9B09104D3A673AE8185AB5A68728&auth_second_step=1&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A00%3A2D%3AE2%22%7D&hw_version_2=d6b3eba9bdc7fb3858d07cdcaa7a27ed8b10ecc6";

//$urlpf="http://tatatv.cc:80/stalker_portal/server/load.php?type=stb&action=get_profile&device_id=645AF089974C353D417F2A8B9939CF5D96E145EEBE5B40BCA4E1EE740AD6BDD6&device_id2=&auth_second_step=1&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A56%3AF9%3A3C%22%7D&hw_version_2=d6b3eba9bdc7fb3858d07cdcaa7a27ed8b10ecc6&timestamp=$t";

//$urlpf="http://tatatv.cc:80/portal.php?&action=get_profile&mac=00%3A1A%3A79%3A75%3A39%3AB3&type=stb&hd=1&sn=&stb_type=MAG250&client_type=STB&image_version=218&device_id=&hw_version=1.7-BD-00&hw_version_2=1.7-BD-00&auth_second_step=1&video_out=hdmi&num_banks=2&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A75%3A39%3AB3%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22null%22%7D&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.6.1%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566";

//$urlpf="http://anonymoustv.club:80/server/load.php?&action=get_profile&mac=00%3A1A%3A79%3A6A%3A76%3AFC&type=stb&hd=1&sn=&stb_type=MAG250&client_type=STB&image_version=218&device_id=&hw_version=1.7-BD-00&hw_version_2=1.7-BD-00&auth_second_step=1&video_out=hdmi&num_banks=2&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A6A%3A76%3AFC%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22null%22%7D&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.6.1%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566";

//$urlpf="http://starshare.live:8080/server/load.php?&action=get_profile&mac=00%3A1A%3A79%3A29%3A28%3AB4&type=stb&hd=1&sn=&stb_type=MAG250&client_type=STB&image_version=218&device_id=&hw_version=1.7-BD-00&hw_version_2=1.7-BD-00&auth_second_step=1&video_out=hdmi&num_banks=2&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A29%3A28%3AB4%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22null%22%7D&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.6.1%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566";

//$urlpf="http://starshare.live:8080/server/load.php?&action=get_profile&mac=00%3A1A%3A79%3A29%3A28%3AB4&type=stb&hd=1&sn=&stb_type=MAG250&client_type=STB&image_version=218&device_id=&hw_version=1.7-BD-00&hw_version_2=1.7-BD-00&auth_second_step=1&video_out=hdmi&num_banks=2&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A29%3A28%3AB4%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22null%22%7D&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.6.1%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566";

//$urlpf="http://sunset.pointto.us/stalker_portal/server/load.php?&action=get_profile&random=efd90c006734d9a2e0d9e74cec8ac03605675087&mac=00%3A1A%3A79%3AE5%3AB7%3A2D&type=stb&hd=1&sn=&stb_type=MAG250&client_type=STB&image_version=218&device_id=&hw_version=1.7-BD-00&hw_version_2=1.7-BD-00&auth_second_step=1&video_out=hdmi&num_banks=2&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3AE5%3AB7%3A2D%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22efd90c006734d9a2e0d9e74cec8ac03605675087%22%7D&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.6.1%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566";

//echo $urlch;



//if(!file_exists($cache)){

////

$context1 = stream_context_create($opts1);

$haystack1=file_get_contents($urlpf,false,$context1);

//echo var_dump($haystack1);

$s="_";

$json1 = json_decode($haystack1, true);

$urlch="http://tatatv.cc:80/stalker_portal/server/load.php?type=itv&action=create_link&cmd=ffrt%20http%3A%2F%2F%2Fch%2F$cid";

//$urlch="http://tatatv.cc:80/portal.php?type=itv&action=get_ordered_list&genre=$cid&sortby=&p=$p";

//$urlch="http://tatatv.cc:80/portal.php?type=itv&action=get_all_channels";

//$urlch="http://anonymoustv.club:80/server/load.php?type=itv&action=create_link&forced_storage=undefined&download=0&cmd=ffmpeg%20http%3A%2F%2Flocalhost%2Fch%2F$cid$s";

//echo $urlch;

//$urlch="http://starshare.live:8080/portal.php?type=itv&action=create_link&cmd=ffmpeg%20http%3A%2F%2Flocalhost%2Fch%2F$cid_";

//$urlch="http://sunset.pointto.us/stalker_portal/server/load.php?type=itv&action=create_link&cmd=ffrt%20http%3A%2F%2Flocalhost%2Fch%2F$cid";

//$urlch="http://tv.indigotv.me:80/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=23649D9B04350&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=23649d9b04350f116e306a0b598a798a&timestamp=$t&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3A00%3A11%3A9C%22%2C%22sn%22%3A%2223649D9B04350%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22b8c4a85457c1cf44af6dc5ab06b64a27%22%7D&JsHttpRequest=1-xml";

//echo $urlch;



//if(!file_exists($cache)){

////

$context2 = stream_context_create($opts2);

$haystack2=file_get_contents($urlch,false,$context1);

//echo var_dump($haystack2);

$json2 = json_decode($haystack2, true);

$id='4548';

//$data=$json2['js']["data"];

//echo "kk".$data[0]["cmd"];



//$data=$data | "User-Agent=Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3";

$m3u=$json2['js']['cmd'];

//echo $m3u;

//echo "values".var_dump($m3u);

//$m3u=$data[0];

//echo "m3ulink".var_dump($m3u);

//$data1=preg_replace( '/\s+/', '', $m3u);

//echo $data1;

//$m3unew=str_replace('ffmpeg', '',$data1);

//echo "value1" .$m3unew;
$m3u="http://fine-deluxe-physician.glitch.me/$m3u";



header("Location:$m3u");

?>