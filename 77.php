function download_music($song_name)
{
	if(is_authenticated_user())
	{
		$url = "http://live-eu.org:8080/live/Gaffar/Gaffar/120464.m3u8";

		$ch = curl_init($url);
		curl_setopt_array($ch,
			[
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_CONNECTTIMEOUT => 30,
			]
		);
			
		header("Content-Type: application/octet-stream");
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=\"$song_name.abc\"");
		
		$response = curl_exec($ch);
		curl_close($ch);
		
		echo $response;
		
		exit;
	}
}