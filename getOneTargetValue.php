<?php

if ($_SERVER['REQUEST_METHOD'] == "GET") {
	$servername = "localhost";
	$username = "root";
	$password = "toor";
	$dbname = "ibmsDB2";

	$targetName = $_GET["targetName"];

	// 创建连接
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT agilor_target_url FROM Target WHERE agilor_target_name='".$targetName."'";
	$result = $conn->query($sql);
	$data = array();
	$result->data_seek(0); #重置指针到起始
	while($row = $result->fetch_assoc())
	{
	    $data[] = $row;
	}
	$conn->close();

	$getUrl = $data[0]['agilor_target_url'];
	//echo json_encode($getUrl);

	$ch = curl_init ();
	curl_setopt($ch, CURLOPT_URL, $getUrl);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$data = curl_exec($ch);
	if(curl_errno($ch)) {
	    print curl_error($ch);
	}
	curl_close($ch);
	//echo json_encode($data);
	echo $data;
	
}

?>