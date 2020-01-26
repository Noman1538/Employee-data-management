<?php
function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","webtech");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
}
$jsonData= getJSONFromDB("select * from login");


$jsn=json_decode($jsonData);

function headercaller($id){
	
	$JasonData= getJSONFromDB("select position from employee where empid= $id");
	$jsn=json_decode($JasonData);
	if ($jsn[0]->position=="owner"){header( "Location:owner.php" );}
	if ($jsn[0]->position=="manager"){header( "Location:manager.php" );}
	
	if ($jsn[0]->position=="supervisor"){header( "Location:supervisor.php" );}
	
	
}

for($i=0;$i<sizeof($jsn);$i++){		
$flag=0;
	if($_POST['id']==$jsn[$i]->Empid && $_POST['pass']==$jsn[$i]->Password){
		
		session_Start();
		
		$_SESSION['id']=$jsn[$i]->Empid;
		headercaller($jsn[$i]->Empid);
		
	}
	else{
		$flag = 1; 
	}
}
if($flag ==1){


echo "ID/Password Is wrong.";

}

?>