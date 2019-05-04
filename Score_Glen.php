<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "MIBGa_DB_admin";
$password = "PenguinPie";
$dbname = "MIBGa_DB";

//These variables will need to be passed from the game
$gameScore = 10;
$currentUser = 'glen';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Select the original score	
$sqlSelect = "SELECT score FROM users WHERE username = '$currentUser'";
$result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {
    // output original score
    while($row = $result->fetch_assoc()) {
        echo "<br> Original Score: ". $row["score"]. "<br>";
		
		//compare the game score against the original score
	if ($row["score"] < $gameScore){
		echo "<br> Game Score: ". $gameScore. "<br>";
		
		// Attempt insert query execution
		$sql = "UPDATE users SET score='$gameScore' WHERE username='$currentUser'";

		if (mysqli_query($conn, $sql)) {
    		echo "Record updated successfully";
} 		else {
    		echo "No New score" . mysqli_error($conn);
}

	}
    }
} else {
    echo "0 results";
}
	

$conn->close();
?> 

</body>
</html>