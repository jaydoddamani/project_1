<html>
<head>
	<title>Hello</title>
	<link rel="stylesheet" type="text/css" href="style.css"> 
</head>

<body>
<center>


<?php
$servername = "localhost";
$username = "root";
$password = "Jay123";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}

//input from the user
$fnm= $_GET["f_name"];
$lnm= $_GET["l_name"];
$eml= $_GET["email"];
 


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$fnm', '$lnm', '$eml')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 


<a href ="addinfo.php"><h4>Back to Add Info</h4></a> <br>
<a href="alldata.php"><h4> All Data</h4> </a> <br>
<a href ="form.html"><h4>Find Records </h4></a> <br>
</body>
</html>
