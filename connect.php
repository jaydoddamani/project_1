<html>
<head><title>Connect</title></head>
<body>


<?php
echo "Connect";
	
	

/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "Jay123", "myDB");
 
// Check connection
if($link === false) 
	{
    		die("ERROR: Could not connect. " . mysqli_connect_error());
	}



?>


</body>
</html>
