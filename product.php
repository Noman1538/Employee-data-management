<?php include ('dbproduct.php');?>
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
	<form method="post" action="dbproduct.php" >
		<div class="input-group">
			<label>Id </label>
			<input type="text" name="id" value="">
		</div>
		<div class="input-group">
			<label>Team</label>
			<input type="text" name="team" value="">
		</div>
		<div class="input-group">
			<label>Style No</label>
			<input type="text" name="styleno" value="">
		</div>
		<div class="input-group">
			<label>Order Size</label>
			<input type="text" name="ordersize" value="">
		</div>
		<div class="input-group">
			<label>Product Name</label>
			<input type="text" name="ProductName" value="">
		</div><div class="input-group">
			<label>Label </label>
			<input type="text" name="Label" value="">
		</div>
		<div class="input-group">
			<label>SMV</label>
			<input type="text" name="SMV" value="">
		</div>
		<div class="input-group">
			<label>First Out</label>
			<input type="text" name="FirstOut" value="">
		</div>
		<div class="input-group">
			<label>Style Change</label>
			<input type="text" name="StyleChange" value="">
		</div>
		<div class="input-group">
			<label>Projected Output</label>
			<input type="text" name="ProjectedOutput" value="">
		</div>
		<div class="input-group">
			<label>Actual Output </label>
			<input type="text" name="ActualOutput" value="">
		</div>
		<div class="input-group">
			<label>Total Men</label>
			<input type="text" name="TotalMen" value="">
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