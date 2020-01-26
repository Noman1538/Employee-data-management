<html>
<head>
<script>
// xmlhttp = new XMLHttpRequest();
function showHint() {
	var xmlhttp = new XMLHttpRequest();
	var str=document.getElementById('mytext').value;	
	document.getElementById("spinner").style.visibility= "visible";
	xmlhttp.onreadystatechange = function() {
		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			//document.getElementById("spinner").style.visibility= "hidden";
			m=document.getElementById("txtHint");
			msg=xmlhttp.responseText;
			
			m.innerHTML=msg;
		}
	};
	var url="db_rw.php?uname="+str;
	//alert(url);
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}
</script>
</head>
<body>

<div>

</div>

<p><b>Start typing a name in the input field below:</b></p>
Your ID : <input type="text"  id="mytext" onkeyup="showHint()" > <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden">
Your Pass : <input type="password"  id="mytext2" onkeyup="" >
<p id="txtHint"></p>
<br/>
<input type="button" value="show" onclick="showHint()">
</body>
</html>