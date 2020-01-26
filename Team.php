<?php include ('dbTEAM.php');
 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM team WHERE TeamID=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$id = $n['TeamID'];
			$address = $n['Size'];
		}
	}
 
?>



<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />


	<link rel="stylesheet" type="text/css" href="style.css">

	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
 <script type="text/javascript">


function validateForm() {
    var a = document.forms["form"]["id"].value;
	var b = document.forms["form"]["size"].value;
    if (a == "" || b== "" ) {
        alert("All the field must be filled out.");
        return false;
    }
	
	alert("working");

} 
</script>
<body>
<?php $results = mysqli_query($db, "SELECT * FROM team"); ?>

<table>
	<thead>
		<tr>
			<th>Team Id</th>
			<th>Number of People</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['TeamID']; ?></td>
			<td><?php echo $row['Size']; ?></td>
			<td>
				<a href="Team.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="dbteam.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

	<form name "form" onsubmit=" validateForm()" method="post" action="dbteam.php" >
		<div class="input-group">
			<label>Team Id </label>
			<input type="text" name="TeamID" value="">
		</div>
		<div class="input-group">
			<label>Number of people</label>
			<input type="text" name="size" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
			
		</div>
	</form>
	
</body>
<?php
if(isset($_SESSION['id'])){
 echo '<a href = "logout.php"><h2>Logout</h2></a>';	
}
?>

</head>
</html>