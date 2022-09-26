<?php
if(function_exists('shell_exec')) {
    header('Content-Type: application/json');
    echo shell_exec("youtube-dl -J https://www.youtube.com/watch?v=zGDzdps75ns");
}
?>
