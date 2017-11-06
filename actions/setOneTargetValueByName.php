<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	$deviceName = $_POST["deviceName"];
	$targetName = $_POST["targetName"];
	$newValue = $_POST["newValue"];
	$targetType = $_POST["targetType"];

	$postUrl = "http://localhost:8098/AgilorReader/devices/" . $deviceName . "/" . $targetName;

	if($targetType == "ENUM") {
		$postUrl = $postUrl . "__" . $newValue;
		$newValue = 1;
	}
	$postUrl = $postUrl . "/set/";
	$data = array(
		'targetValue' => $newValue
	);
	$data_string = json_encode($data);

	$ch = curl_init ();
	curl_setopt($ch, CURLOPT_URL, $postUrl);
	curl_setopt($ch, CURLOPT_POST, TRUE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	    'Content-Type: application/json',
	    'Content-Length: ' . strlen($data_string)
	));

	$response = curl_exec($ch);
	if(curl_errno($ch)) {
	    print curl_error($ch);
	}
	echo $response;

	curl_close($ch);
}

?>