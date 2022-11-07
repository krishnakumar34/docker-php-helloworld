<?php
$chk=$_GET['c']; 
$url1="https://www.youtube.com/embed/live_stream?channel=$chk";
//$url1="https://www.youtube.com/channel/UCYlh4lH762HvHt6mmiecyWQ/live";
//echo $url1;
//call api
//$jsonvalues = file_get_contents($url1);
//echo "results1" .$jsonvalues;

//echo "objecttype".gettype($jsonvalues);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/text" ));
$response = curl_exec($ch);
//echo var_dump($response);

parse_str($response, $query);

//echo "raguram" .var_dump(parse_str($response,$query));
//$test=($query["VIDEO_ID"]);
//$result=json_encode($test,true);
//echo $result;
//$resultdata=json_decode($result,true);
//$kr=$resultdata["yt_config_||ytcfg_data_||(ytcfg_data_"];
$channelid="";
$channelid4="";
if(preg_match("/POST_MESSAGE_ORIGIN(.*)/", $response,$result1)){
	//if(preg_match("/VIDEO_ID(.*)/",$result1,$resultkk){

//echo "raguvideoid".$result1[0];
$chid= explode(":",$result1[0]);
//echo"hs".$chid[2];
$temp= $chid[2];
$rs=explode("," ,$temp);
//echo $rs[0];
//$vid=explode(" ",$rs);
//echo "karen". $vid[1];
//$rs=str_replace("}" , ' ' ,$vid[1]);
//echo "rs". $rs;
//$rs=explode(" ,",$rs);
//echo "kis".$rs[0];
$channelid=$rs[0];
//echo "kk.".$channelid;
//$channelid2=str_replace("\\","",$channelid);
//echo var_dump($channelid);
//$channelid3=str_replace(']', '',$channelid2);
$channelid4 = str_replace('"', '',$channelid);
//}
}
function str_replace_first($sh,$that,$s)
         {
         $w=strpos($s,$sh);
         if($w===false)return $s;
         return substr($s,0,$w).$that.substr($s,$w+strlen($sh));
         }
 ini_set("user_agent","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)");
    /* gets the data from a URL */
function get_data($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, "facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)");
    curl_setopt($ch, CURLOPT_REFERER, "http://facebook.com");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array( "Content-Type: application/json" ));
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
//echo "chhh".$channelid4;
$url2="https://ypm3.onrender.com/video/$channelid4";
//echo $url2;
//$resp = file_get_contents($urlVideoDetails);  
//echo json_decode($resp);     

$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, $url2);
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch1, CURLOPT_HEADER, FALSE);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array("Content-Type: application/json" ));
$response = curl_exec($ch1);
//echo $response;
$rs2="";
if(preg_match("/streamUrl(.*)}/", $response,$result2)){
//echo "videoid".$result2[1];
$m3k=$result2[1];
//$rs2=preg_replace('/:/', ' ', $result2[1], 1);
$rs2=str_replace_first(":" , ' ' ,$m3k);
$rs2=str_replace("streamUrl" , ' ' ,$rs2);
$rs2=str_replace("}" , ' ' ,$rs2);
$rs2=str_replace("\"","",$rs2);
//echo "m3u8".$rs2;
//$rs2=str_replace(' ',':',$rs2);
//$rs2=split("\:",$rs2,0);
//$vid2=explode(":",rs2);
//echo "karen2". $rs2;
//header("Location:$rs2");
}
header("Location:$rs2");
die();
?>
