<?php
//Live video URL: https://abclive1-lh.akamaihd.net/i/abc_live01@423395/master.m3u8
//Pre recorded video URL: http://qthttp.apple.com.edgesuite.net/1010qwoeiuryfg/sl.m3u8
$url = $_GET['url'];
if (!$url) {
print "no URL";
} 

else {

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$lastUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
header('Content-Type: application/x-mpegurl'); 
readfile($lastUrl); 
curl_close($ch);
}
?>