<?php
//get the current score
$currentScore = intval($_POST["score"]);

//start session
session_start();

// connect to database
$db = mysqli_connect('localhost', 'MIBGa_DB_admin', 'PenguinPie', 'MIBGa_DB');

//get the current user of the session
$user = $_SESSION['username'];

//get a user's previous score from the database
$getQuery = "SELECT score FROM users WHERE username = $user";
$previousScore = intval(mysqli_query($db, $getQuery));

//check if the current score is greater than the previous score
//if it is, update the score
if($currentScore > $previousScore) {
	$setQuery = "UPDATE users SET score = $currentScore 
		WHERE username = $user";
	mysqli_query($db, $setQuery)
}

?>