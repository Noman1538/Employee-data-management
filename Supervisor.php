<!DOCTYPE html>

<?php


session_start();


?>



<?php


if(!isset($_SESSION['id'])){
	
	header("Location: error.php");
	
}



?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylehomepage.css" />
</head>

<body>
<div id="container">
		
		
		
		
        
		<div id="content">
        	<h2>Manager Homepage </h2>
        	<p>&nbsp;</p>
           	<p>&nbsp;</p>
		  <pre>
        	       
			</pre>
<pre>
        	<h3>1. <a href = "product.php">Product Info</a></h3>
			

			<?php


     if(isset($_SESSION['id'])){
	
	    echo '<a href = "logout.php"><h2>Logout</h2></a>';
	
          }



?>

			
			
			</pre>
        	 <p>&nbsp;</p>
        	<p>&nbsp;</p>
<p>&nbsp;</p>
            
           
      </div>
   </div>
</body>
</html>
