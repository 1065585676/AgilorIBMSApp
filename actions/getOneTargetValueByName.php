<?php

if ($_SERVER['REQUEST_METHOD'] == "GET") {
	$deviceName = $_GET["deviceName"];
	$targetName = $_GET["targetName"];
	$getUrl = "http://localhost:8098/Agilor/devices/" . $deviceName . "/" . $targetName;

	$ch = curl_init ();
	curl_setopt($ch, CURLOPT_URL, $getUrl);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$data = curl_exec($ch);
	if(curl_errno($ch)) {
	    print curl_error($ch);
	}
	curl_close($ch);
	echo $data;
}

?>