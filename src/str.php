<?php
$cid=$_GET['c']; 
//$p = $_GET['p']; 
$url1="https://sample2-ihle.onrender.com/ch.json";
//echo $url1;

//call api
//$jsonvalues = file_get_contents($url1);
//echo "results1" .$jsonvalues;

//echo "objecttype".gettype($jsonvalues);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array( "Content-Type: application/json" ));
$response = curl_exec($ch);
//echo "result".var_dump($response);
$json = json_decode($response, true);
//$json = json_decode($response, true);
//echo "somevaldecoded" .$json['js']['data'][0]['cmd'];
//echo "result2".var_dump($json[0]);
$keys = array_keys($json); 
$m3u="";
for($i=0; $i < count($keys); ++$i) { 
//echo"keys". $json[$i]["link"] . ' ' . ///////

if($json[$i]["id"]==$cid){
$m3u =$json[$i]["link"];
}

}
//$id = $_GET['id'];
//$data=$json['js']['data'];
//echo "values".$data;
//$m3u=$json['js']['data'][$id]['cmd'];
//echo $m3u;
//$m3unew=str_replace('ffmpeg', '',$m3u);
echo "value".$m3u;
header("Location:$m3u");
die();
?>
