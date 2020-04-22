<?php
$url = file_get_contents("https://cdn.nsxmedia.net:443/hlspubx/143.m3u8");
preg_match('#file:"(.*?)"#', $url,$getm3u8);

echo ($getm3u8[1]);
?>