<?php
//$cid=$_GET['c']; 
//$p = $_GET['p']; 
$url1="https://tamiltv.store/api/?RzJZTjVEd3BOM09kUGJ6ZUhEZm5NMW54NHhxL3FtTnVmTWlMNFZlc09hbUFvb2piakRpRmJCS1FwZ09sVUpmZmorNnoyWWVnREJoNERNbE43RGhvbFNQQi9hYWVHc0lJRGtMTjYydFQwNGR6ZHN4QkFTYVFGYkYvUnFCc1Q2aXVCcm9jZGNoRnhCVmtLOFpoQmUzVzJScVVndk51c3BhS0dGbDcwdmhkS3RsS3Ftck4zSVVKQWlWdmpwMUVCZktjL0pQNHBsTEdsYU5FaU1yamtqRzhmU2FmemVOY2pzZmZSa0F6d3NkUG1LK2xJd3plbDNqb01YOVA3T21PYmFyb1NBT1ZqN3llbnVURXN5U0F4bzBGaFE9PQ,,";
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
echo "result".var_dump($response);
//echo "kk".var_dump(json_decode($response,true));
$json = json_decode($response, true);
//echo "result3".var_dump($json);
//echo "resultfff". var_dump($json["sources"][0]["file"]);
$m3unew=$json["sources"][0]["file"];
echo $m3unew;
//$json= json_decode($json, false);
//echo "decoded".var_dump($json);

$m3unew=trim($m3unew, '"');

//echo "result45".$m3unew;
//echo trim($m3unew, '"');
//echo $m3unew;

header("Location: $m3unew");
die();
//} 
?>
