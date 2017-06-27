<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$servername = "localhost";
	$username = "root";
	$password = "toor";
	$dbname = "ibmsappdb";

	$dbtablename = "point";

	$pointID = $_POST["pointID"];

	// 创建连接
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT * FROM $dbtablename WHERE point_id = '".$pointID."'";
	$result = $conn->query($sql);
	$data = array();
	$result->data_seek(0); #重置指针到起始
	while($row = $result->fetch_assoc())
	{
	    $data[] = $row;
	}
	$conn->close();

	echo json_encode($data);
}

?>