<?php
$url = $_GET['url'] ?? '';

if (!$url || !filter_var($url, FILTER_VALIDATE_URL)) {
    http_response_code(400);
    exit("Invalid or missing URL.");
}

// Setup headers
$headers = [
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
    'Referer: https://familyip.vip/',
    'Origin: https://familyip.vip',
];

// Stream the content (chunked)
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
curl_setopt($ch, CURLOPT_BUFFERSIZE, 1024);
curl_setopt($ch, CURLOPT_WRITEFUNCTION, function($ch, $data) {
    echo $data;
    flush();
    return strlen($data);
});

$info = curl_getinfo($ch);
$contentType = $info['content_type'] ?? 'application/octet-stream';
http_response_code($info['http_code'] ?? 200);
header("Content-Type: $contentType");

curl_exec($ch);
curl_close($ch);
?>