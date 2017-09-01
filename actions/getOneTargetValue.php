<?php

if ($_SERVER['REQUEST_METHOD'] == "GET") {
	$servername = "localhost";
	$username = "ibms";
	$password = "toor";
	$dbname = "ibmsappdb";
	$dbtablename = "knx_device";
	

	$targetName = $_GET["targetName"];

	// 创建连接
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT agiolor_web_api_url FROM $dbtablename WHERE agilor_aci_name='".$targetName."'";
	$result = $conn->query($sql);
	$data = array();
	$result->data_seek(0); #重置指针到起始
	while($row = $result->fetch_assoc())
	{
	    $data[] = $row;
	}
	$conn->close();

	$getUrl = $data[0]['agiolor_web_api_url'];
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