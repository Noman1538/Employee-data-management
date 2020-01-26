<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'webtech');

	// initialize variables
	$id = 0;
	$team=0; 
	$styleno="";
	$ordersize=0;
	$ProductName="";
	$Label="";
	$SMV=0;
	$FirstOut="";
	$StyleChange=0;
	$ProjectedOutput=0;
	$ActualOutput=0;
	$TotalMen=0;
	$update = false;
	


	if (isset($_POST['save'])) {
		$id = $_POST['id'];
		$team = $_POST['team'];
		$styleno=$_POST['styleno'];
        $ordersize=$_POST['ordersize'];
		$ProductName=$_POST['ProductName'];
		$Label=$_POST['Label'];
		$SMV=$_POST['SMV'];
		$FirstOut=$_POST['FirstOut'];
		$StyleChange=$_POST['StyleChange'];
		$ProjectedOutput=$_POST['ProjectedOutput'];
		$ActualOutput=$_POST['ActualOutput'];
		$TotalMen=$_POST['TotalMen'];
			
		mysqli_query($db, "INSERT INTO product (Id, Team, StyleNo, OrderSize, ProductNmae, Label, SMV, FirstOut, StyleChange, ProjectedOutput, ActualOutput, TotalMen) 
		VALUES ('$id', '$team','$styleno', '$ordersize','$ProductName', '$Label','$SMV', '$FirstOut','$StyleChange', '$ProjectedOutput','$ActualOutput', '$TotalMen,'$update')"); 
		$_SESSION['message'] = "Data saved"; 
		header('location: product.php');
	}
	?>
	