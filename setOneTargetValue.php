<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$servername = "localhost";
	$username = "root";
	$password = "toor";
	$dbname = "ibmsappdb";

	$targetName = $_POST["targetName"];
	$newValue = $_POST["newValue"];

	// 创建连接
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT point_url, point_value_type FROM point WHERE point_name='".$targetName."'";
	$result = $conn->query($sql);
	$data = array();
	$result->data_seek(0); #重置指针到起始
	while($row = $result->fetch_assoc())
	{
	    $data[] = $row;
	}
	$conn->close();

	$postBaseUrl = $data[0]['point_url'];
	$targetType = $data[0]['point_value_type'];

	

	$postUrl = $postBaseUrl . "/set/";
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

	if($targetType == "ENUM") {
		$postUrl = $postBaseUrl . "_" . $newValue;
		$newValue = 1;

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
	}
	
	curl_close($ch);
}

?>