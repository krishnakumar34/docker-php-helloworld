<?php
$cid=$_GET['c']; 
//$p = $_GET['p']; 
$url1="https://athavantv.com/live/new-stream.php?w=100%&h=390";
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

preg_match("/file:(.*)\label/", $json,$results) ;


//echo "result4".var_dump($results[1]);
$data=$results[1];
$m3unew=str_replace('\\' , '',$results[1]);
$m3unew=str_replace(',', '', $m3unew);
$m3unew=trim($m3unew, '"');
//echo "result45".$m3unew;
//echo trim($m3unew, '"');
//echo $m3unew;
$m3u="";
//if (preg_match('/"([^"]+)"/', $m3unew, $m)) { 
//$m3u =$m[1];
header("Location: $m3unew");
die();
//} 
?>
