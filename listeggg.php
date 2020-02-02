<?php

$curl = curl_init('http://yayin12.bunusanasoracagim.best:80/priv/b1111/playlist.m3u8');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$page = curl_exec($curl);
$stream_name = "Webcam";

if(curl_errno($curl)) // check for execution errors
{
    echo 'Scraper error: ' . curl_error($curl);
    exit;
}

curl_close($curl);

$regex = '/token=(.*?)"/';
if ( preg_match($regex, $page, $match) )
    $stream_url =  "http://yayin12.bunusanasoracagim.best:80/priv/b1111/playlist.m3u8".$match[1];
else ($stream_url =  "error");

header('Content-Type: application/octet-stream');
echo "#EXTM3U\n";
echo "#EXTINF:-1," . $stream_name . "\n";
echo $stream_url;

?>