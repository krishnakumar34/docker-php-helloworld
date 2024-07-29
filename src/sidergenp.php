<?php
$cid=$_GET['c']; 
//$ch=$_GET['ch']; 
//$p = $_GET['p']; 
	$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
		"X-User-Agent: Model: MAG250; Link: WiFi\r\n" .
"Referer: http://crystalott.net:80/c/\r\n" .
"Cookie: mac=00:1A:79:10:11:12; stb_lang=en; timezone=Europe%2FParis\r\n" .
"Authorization:Bearer:91EB8DD6B3B75D3E0C9EC8B7C6B532C6" .
"Accept: */*\r\n"

    ]
];


//$cache=str_replace("/","_",$_REQUEST["key"]);

//if(!file_exists($cache)){

$context = stream_context_create($opts);
echo "#EXTM3U";

for($j=1;$j<=25;++$j){
$haystack = file_get_contents("http://crystalott.net:80/server/load.php?type=itv&action=get_ordered_list&genre=$cid&force_ch_link_check=&p=$j&JsHttpRequest=1-xml/",false,$context);
//echo $haystack;
$json = json_decode($haystack, true);
$id='4548';
$data=$json['js']['data'];

$keys = array_keys($data); 

//$m3u="";

//echo "#EXTM3U";

echo "<br>";

for($i=0; $i <count($keys); ++$i) { 

//echo"keys". $json[$i]["link"] ;

$url="http://ramkumar.serv00.net/siderapr24.php?c=$cid&ch=$i&p=$j";
echo "#EXTINF:-1," .$data[$i]["name"];

echo "<br>";

echo "#EXTVLCOPT:http-user-agent=VLC/3.0.7.1 LibVLC/3.0.7.1";

echo " <br>";

echo $url;

echo "<br>";


 


}

}

//$m3unew=str_replace('ffmpeg', '',$m3u);
//echo "value".$m3unew;
//header("Location:$m3unew");
?>
