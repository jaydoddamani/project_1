<html>
<head>
	<title>Hello</title>
	<link rel="stylesheet" type="text/css" href="style.css"> 
</head>

<body>



<?php
include('connect.php');
 


//input type
$fild=id;

//input from the user
$p_id= $_GET["pid"]; 

// Attempt select query execution
$sql = "SELECT * FROM MyGuests where $fild=$p_id";
if($result = mysqli_query($link, $sql))
{
    if(mysqli_num_rows($result) > 0)
	{
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>First Name</th>";
                echo "<th>lastname</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result))
		{
           	 echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
           	 echo "</tr>";
		}
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
	}
	else{
        	echo "No records matching your query were found.";
    		}
}
	else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

// Close connection
mysqli_close($link);
?>

<a href ="addinfo.php"><h2>Add Info</h2></a> <br>
<a href ="form.html"><h4>Back to Find Info </h4></a> <br>
<a href="alldata.php"><h4> All Data</h4> </a> <br>
</body>
</html>
