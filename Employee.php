<?php include ('dbEMP.php');?>
<?php


 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


?>



<?php


if(!isset($_SESSION['id'])){
	
	header("Location: error.php");
	
}



?>



<html>
<script type="text/javascript">


function validateForm() {
    var a = document.forms["login"]["id"].value;
	var b = document.forms["login"]["pass"].value;
    if (a == "" || b== "" ) {
        alert("All the field must be filled out.");
        return false;
    }
	
	

} 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylehomepage.css" />
</head>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" action="dbEMP.php" >
		<div class="input-group">
			<label>Emp Id </label>
			<input type="text" name="EmpId" value="">
		</div>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="Name" value="">
		</div>
		<div class="input-group">
			<label>Position</label>
			<input type="text" name="Position" value="">
		</div>
		<div class="input-group">
			<label>Mobile</label>
			<input type="text" name="Mobile" value="">
		</div>
		<div class="input-group">
			<label>Team</label>
			<input type="text" name="Team" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>
</body>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<?php
if(isset($_SESSION['id'])){
 echo '<a href = "logout.php"><h2>Logout</h2></a>';	
}
?>
</html>