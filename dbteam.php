<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'webtech');

	// initialize variables
	$Id = 0;
	$Size = 0;
	
	$update = false;

	if (isset($_POST['save'])) {
		$id= $_POST['TeamID'];
		$Size = $_POST['size'];

		mysqli_query($db, "INSERT INTO team (TeamID, Size) VALUES ('$id', '$Size')"); 
		$_SESSION['message'] = "Data saved"; 
		header('location: Team.php');
	}
	if (isset($_POST['update'])) {
	
	$id = $_POST['TeamID'];
	$size = $_POST['size'];

	mysqli_query($db, "UPDATE team SET TeamID='$id', Size='$Size' WHERE TeamID=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: team.php');

	if (isset($_GET['del'])) {
	
	mysqli_query($db, "DELETE FROM team WHERE TeamID=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: team.php');
}
}
	?>
	