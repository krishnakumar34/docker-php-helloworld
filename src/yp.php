<?php
$cid=$_GET['c']; 
//$p = $_GET['p']; 
$url1="https://www.yupptv.com/channels/$cid/live/embed";
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
$json = json_encode($response, true);
//echo "result3".var_dump($json);

preg_match("/src:(.*)\m3u8/", $json,$results) ;


//echo "result4".var_dump($results[0]);
$data=$results[0];
$m3unew=str_replace('\\' , '',$results[0]);
//echo "result4".var_dump($m3unew);
$m3u="";
if (preg_match('/"([^"]+)"/', $m3unew, $m)) { 
$m3u =$m[1];
header("Location: $m3u");
die();
} 

?>

