<?php



$cid=$_GET['c']; 



//$ch=$_GET['ch']; 



//$p = $_GET['p']; 







$opts = [



    "http" => [



        "method" => "GET",



        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .



"X-User-Agent: Model: MAG250; Link: WiFi\r\n".



"Referer: http://pureiptv.in/c/\r\n" .



"Cookie: mac=00:1A:79:D8:CE:F6;stb_lang=en; timezone=Europe%2FParis \r\n" .



"Accept: */*\r\n".



"Host: pureiptv.in:-1\r\n"



    ]



];



	//echo "test";



$context = stream_context_create($opts);



$haystack = file_get_contents("http://pureiptv.in:80/portal.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml",false,$context);



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



"Referer: http://pureiptv.in/c/\r\n" .



"Cookie: mac=00:1A:79:D8:CE:F6;stb_lang=en;timezone=Europe%2FParis \r\n" .



"Authorization: Bearer $token\r\n".



"Accept: */*\r\n".



"Host: pureiptv.in:-1\r\n"



    ]



];


$t=time();
$pf="http://pureiptv.in:80/portal.php?&action=get_profile&mac=00%3A1A%3A79%3AD8%3ACE%3AF6&type=stb&hd=1&sn=&stb_type=MAG250&client_type=STB&image_version=218&device_id=&hw_version=1.7-BD-00&hw_version_2=1.7-BD-00&timestamp=$t&auth_second_step=1&video_out=hdmi&num_banks=2&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3AD8%3ACE%3AF6%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22null%22%7D&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.6.1%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566";

//$pf="http://pureiptv.in:80/portal.php?&action=get_profile&mac=00%3A1a%3A79%3AB5%3A86%3A8F&type=stb&hd=1&sn=&stb_type=MAG250&client_type=STB&image_version=218&device_id=&hw_version=1.7-BD-00&hw_version_2=1.7-BD-00&auth_second_step=1&video_out=hdmi&num_banks=2&metrics=%7B%22mac%22%3A%2200%3A1a%3A79%3AB5%3A86%3A8F%22%2C%22sn%22%3A%22%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22null%22%7D&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.6.1%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566";



$context4= stream_context_create($opts1);



$haystack4=file_get_contents($pf,false,$context4);



//echo var_dump($haystack1);



//$s="_";



$json4 = json_decode($haystack4, true);

//$cache=str_replace("/","_",$_REQUEST["key"]);



$s="_";

//if(!file_exists($cache)){



$chl="http://pureiptv.in:80/portal.php?type=itv&action=create_link&forced_storage=undefined&download=0&cmd=ffmpeg%20http%3A%2F%2Flocalhost%2Fch%2F$cid$s";

//echo $chl;

//$chl="http://pureiptv.in:80/portal.php?type=itv&action=get_ordered_list&genre=$cid&p=$p";

$context1 = stream_context_create($opts1);



$haystack1 = file_get_contents($chl,false,$context1);



//echo $haystack1;



$json1 = json_decode($haystack1, true);



//echo var_dump($json1);



$id='4548';



$data=$json1['js']['cmd'];



//$m3u=$json1['js']['data'][$ch]['cmd'];



//echo "values".var_dump($data);



//$m3u=$data[0];



//echo "m3ulink".var_dump($m3u);

//$m3unew= str_replace('ffmpeg%20' '', $url);
//$data = trim($data);


//$data= str_replace('pureiptv.in', 'pureiptv.in:80',$data);

$data= str_replace(["ffmpeg%20", "ffmpeg "], "", $data);
//echo $data;

//$m3unew=str_replace('ffmpeg', '',$data);
$m3unew=str_replace('ts', '.m3u8',$data);

//echo $m3unew;


//echo "value".$m3unew;



header("Location:$m3unew");


?>