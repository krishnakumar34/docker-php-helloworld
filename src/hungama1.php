<?php
//$cid=$_GET['c']; 
//$p = $_GET['p']; 

$opts = [
    "http" => [
        "method" => "GET",
        "header" =>  "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3\r\n" .
"Referer: https://tamiltv.store\r\n"
    ]
];
	
$context = stream_context_create($opts);
$urltk="https://tamiltv.store/api/?RzJZTjVEd3BOM09kUGJ6ZUhEZm5NMW54NHhxL3FtTnVmTWlMNFZlc09hbUFvb2piakRpRmJCS1FwZ09sVUpmZmorNnoyWWVnREJoNERNbE43RGhvbFNQQi9hYWVHc0lJRGtMTjYydFQwNGR6ZHN4QkFTYVFGYkYvUnFCc1Q2aXVCcm9jZGNoRnhCVmtLOFpoQmUzVzJScVVndk51c3BhS0dGbDcwdmhkS3RsS3Ftck4zSVVKQWlWdmpwMUVCZktjL0pQNHBsTEdsYU5FaU1yamtqRzhmU2FmemVOY2pzZmZSa0F6d3NkUG1LK2xJd3plbDNqb01YOVA3T21PYmFyb1NBT1ZqN3llbnVURXN5U0F4bzBGaFE9PQ,,&_=1686624427907";
$haystack = file_get_contents($urltk,false,$context);
//$url1="https://tamiltv.store/api/?RzJZTjVEd3BOM09kUGJ6ZUhEZm5NMW54NHhxL3FtTnVmTWlMNFZlc09hbUFvb2piakRpRmJCS1FwZ09sVUpmZmorNnoyWWVnREJoNERNbE43RGhvbFNQQi9hYWVHc0lJRGtMTjYydFQwNGR6ZHN4QkFTYVFGYkYvUnFCc1Q2aXVCcm9jZGNoRnhCVmtLOFpoQmUzVzJScVVndk51c3BhS0dGbDcwdmhkS3RsS3Ftck4zSVVKQWlWdmpwMUVCZktjL0pQNHBsTEdsYU5FaU1yamtqRzhmU2FmemVOY2pzZmZSa0F6d3NkUG1LK2xJd3plbDNqb01YOVA3T21PYmFyb1NBT1ZqN3llbnVURXN5U0F4bzBGaFE9PQ,,";
//echo $url1;

//call api
//$jsonvalues = file_get_contents($url1);
//echo "results1" .$jsonvalues;

//echo "objecttype".gettype($jsonvalues);

//echo "result".var_dump($response);
echo "kk".var_dump(json_decode($haystack,true));

$json = json_decode($haystack, true);
//echo "result3".var_dump($json);
//echo "resultfff". var_dump($json["sources"][0]["file"]);
$m3unew=$json["sources"][0]["file"];
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
