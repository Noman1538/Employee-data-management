<?php
function updateDB($sql){
	$conn = mysqli_connect("localhost", "root", "", "webtech");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
}

function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","record");
	//echo $sql;
	$result = mysqli_query($conn, )or die(mysqli_error($$conn));
	$arr=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
}
?>