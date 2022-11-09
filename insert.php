<?php 

function greetings($name, $email, $pass, $office, $salary, $CPF, $RG, $assignments, $startDate, $birthDate) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "PDWA5";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		
		die("Connection failed..: " . mysqli_connect_error());
	} 

	$sql = "INSERT INTO clients (`name`, email, pass, office, salary, CPF, RG, assignments, startDate, birthDate) 
	VALUES ('$name', '$email', '$pass', '$office', '$salary', '$CPF', '$RG', '$assignments', '$startDate', '$birthDate')";
	
	if ($conn->query($sql) === TRUE) {
		$response = "New record created successfully";
	} else {
		//$response = "Error: " . $sql . "<br>" . $conn->error;
		$response = "Error";
	}
	$conn->close();
	return $response;
    }







?>
