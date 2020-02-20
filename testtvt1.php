<?php
$Url = "https://www.tv360.com.tr/canli-yayin";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $Url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE );
curl_setopt($ch, CURLOPT_HTTPHEADER, array('https://www.tv360.com.tr/'));
curl_setopt($ch, CURLOPT_REFERER, "https://www.tv360.com.tr/" );
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
$header = array(
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7',
'Accept-Language: en-us;q=0.8,en;q=0.6' );
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$html = curl_exec($ch);
curl_close($ch);
$text = strip_tags($html);
preg_match_all("@m3u8(.*?)\",@si ", $text, $output);
$parts = explode('"', $output[0][0]);
?>


<?php echo $parts[0]; ?>