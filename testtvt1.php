<?php
if(function_exists('file_get_contents')) {
$data = file_get_contents('http://yayin12.bunusanasoracagim.best:80/selcuksportsfutbol/eurosport22/playlist.m3u8');
preg_match('@<div class="burcDetail mBot30px"><p>(.*?)</div>@si', $data, $content);
echo $content[0];
} else {
echo "wm araci";
}
?>
<?php echo $parts[0]; ?>