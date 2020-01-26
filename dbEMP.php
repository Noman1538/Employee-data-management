<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'webtech');

	// initialize variables
	    $EmpId=0;
		$Name="";
		$Position="";
		$Mobile=0;
		$Team=0;
		$update = false;

	if (isset($_POST['save'])) {
		$EmpId = $_POST['EmpId'];
		$Name= $_POST['Name'];
		$Position = $_POST['Position'];
		$Mobile = $_POST['Mobile'];
		$Team = $_POST['Team'];
		


		mysqli_query($db, "INSERT INTO employee (EmpId, Name,Position,Mobile,Team) VALUES ('$EmpId', '$Name','$Position','$Mobile','$Team')"); 
		$_SESSION['message'] = "Data saved"; 
		header('location: employee.php');
	}
	