<?php
if(function_exists('exec')) {
    header('Content-Type: application/json');
    echo exec("youtube-dl -J https://www.youtube.com/watch?v=zGDzdps75ns");
}
?>