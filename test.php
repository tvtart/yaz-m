<?php
$url = file_get_contents("https://ubld.cc/78y4e");
preg_match('#file:"(.*?)"#', $url,$getm3u8);

echo ($getm3u8[1]);
?>
