<?php
//$cid=$_GET['c']; 
//$ch=$_GET['ch']; 
//$p = $_GET['p']; 
	$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
		"X-User-Agent: Model: MAG250; Link: WiFi\r\n" .
"Referer: http://line.crystalott.net:80/c/\r\n" .
"Cookie: mac=00:1A:79:1A:00:10;stb_lang=en;timezone=GMT\r\n" .
"Authorization:Bearer:090D73C116B9AC45CB0FB0DF99A7DBCF" .
"Accept: */*\r\n"

    ]
];


//$cache=str_replace("/","_",$_REQUEST["key"]);

//if(!file_exists($cache)){

$context = stream_context_create($opts);
echo "#EXTM3U";


$all="*";
for($j=1;$j<=63;++$j){
$urlmv="http://line.crystalott.net:80/server/load.php?type=vod&action=get_ordered_list&genre=415&get_category=$all&p=$j";
$haystack = file_get_contents($urlmv,false,$context);
//echo $haystack;
$json = json_decode($haystack, true);
$id='4548';
$data=$json['js']['data'];



$keys = array_keys($data); 



//$m3u="";



//echo "#EXTM3U";



echo "<br>";



for($i=0; $i <count($keys); ++$i) { 

//$q=";
//echo"keys". $json[$i]["link"] ;
$cm=",";
$img= "$data[$i]["screenshot_uri"]"$cm;
//print($img);

//$url="https://kriskk.herokuapp.com/sidermay23.php?c=$cid&ch=$i&p=$j";

echo "#EXTINF:-1 tvg-logo='$img'.$data[$i]["name"];



echo "<br>";



echo "#EXTVLCOPT:http-user-agent=VLC/3.0.7.1 LibVLC/3.0.7.1";



echo " <br>";



echo $url;



echo "<br>";


 
echo "https://sample2-ihle.onrender.com/linemovies.php?c=".$data[$i]['id'];

echo "<br>";



}


}
$data=$json['js']['data'];
//$m3u=$json['js']['data'][$ch]['cmd'];
//echo "values".var_dump($m3u);
//$m3u=$data[0];
//echo "m3ulink".var_dump($m3u);
//$m3unew=str_replace('ffmpeg', '',$m3u);
//echo "value".$m3unew;
//header("Location:$m3unew");
?>
