<?php
$cid=$_GET['c']; 
//$p = $_GET['p']; 
$url1="https://vembx.one/$cid.html";
//echo $url1;
$ch = curl_init();
$config['useragent'] = 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0';

curl_setopt($ch, CURLOPT_USERAGENT, $config['useragent']);

//call api
//$jsonvalues = file_get_contents($url1);
//echo "results1" .$jsonvalues;
//echo "objecttype".gettype($jsonvalues);
//$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array( "Content-Type: application/json" ));
$response = curl_exec($ch);
//echo "result".var_dump($response);
$json = json_encode($response, true);
//echo "result3".var_dump($json);

preg_match("/file:(.*)mp4/", $json,$results) ;


//echo "result4".var_dump($results);
$data=$results[0];
$data=explode("file:",$data);
$data=$data[2];
$data=explode(",",$data);
//echo $data[0];
//echo  var_dump(explode("file:",$data));
$m3unew=str_replace('\\' , '',$data[0]);
//echo $m3unew;
//$m3u=str_replace('file:' , '',$m3unew);
m3u= trim($m3unew, '"');
//echo $m3u;
$hostkk=explode('/',$m3u)[2];
$ip = gethostbyname($hostkk);
//echo $ip
$m3une=str_replace($hostkk,$ip,$m3u);
//echo $m3unew;
header("Location: $m3une");
//die();
?>
