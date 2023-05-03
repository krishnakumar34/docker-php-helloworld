<?php
function str_replace_first($sh,$that,$s)
         {
         $w=strpos($s,$sh);
         if($w===false)return $s;
         return substr($s,0,$w).$that.substr($s,$w+strlen($sh));
         }
//$channelid=$_GET['c'];

$url2="https://m.youtube.com/watch?v=zdmO0ROMGUI";
//$url2="https://ypm3.onrender.com/video/$channelid";
//$resp = file_get_contents($urlVideoDetails);  
//echo json_decode($resp);     

$ch1 = curl_init();
$agent = 'Mozilla/5.0 (Linux; Android 10; motorola one fusion+ Build/QPIS30.73-33-13; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.127 Mobile Safari/537.36';
  
curl_setopt($ch1, CURLOPT_USERAGENT, $agent);
curl_setopt($ch1, CURLOPT_URL, $url2);
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch1, CURLOPT_HEADER, FALSE);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array("Content-Type: application/json" ));
$response = curl_exec($ch1);
//echo var_dump($response);
$rs2="";
if(preg_match("/hlsManifestUrl(.*)}/", $response,$result2)){
//echo "videoid".$result2;
$m3k=$result2[1];
//$rs2=preg_replace('/:/', ' ', $result2[1], 1);
$rs2=str_replace_first(":" , ' ' ,$m3k);
$rs2=str_replace("hlsManifestUrl" , ' ' ,$rs2);
$rs2=str_replace("}" , ' ' ,$rs2);
$rs2=str_replace("\"","",$rs2);
//$rs2=str_replace(' ',':',$rs2);
//$rs2=split("\:",$rs2,0);
$vid2=explode(",",$rs2);
//echo "karen2". $vid2[0];
$m3unew=$vid2[0];
//header("Location:$rs2");
}
header("Location:$m3unew");
die();
?>