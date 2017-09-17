<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$data = json_decode(file_get_contents("php://input"), true);
	if (isset($data["isPoll"]) && $data["isPoll"] == TRUE) {
		//echo "poll";
		$guid = $data["guid"];
		$isRefresh = $data["isRefresh"];
		$postUrl = "http://localhost:8098/AgilorReader/poll";
		$data = array(
			'guid' => $guid,
			'isRefresh' => $isRefresh
		);
	} else {
		//echo "watch";
		$targetsName = $data["targetsName"];
		$timeout = $data["timeout"];
		$postUrl = "http://localhost:8098/AgilorReader/watch";
		$data = array(
			'targetsName' => $targetsName,
			'timeout' => $timeout
		);
	}

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