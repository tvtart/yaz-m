<?php
$url = file_get_contents("http://yayin12.bunusanasoracagim.best:80/selcuksportsfutbol/eurosport22/playlist.m3u8");
preg_match('#file:"(.*?)"#', $url,$getm3u8);

echo ($getm3u8[1]);
?>