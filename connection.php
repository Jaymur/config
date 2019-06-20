<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'password');

	if (!empty($email)) {
	if (!empty($password)) {
	$host = "localhost";
	$dbemail = "root";
	$dbpassword = "";
	$dbname = "feeder";

	//creating connection
	$conn = new mysqli ($host, $dbemail, $dbpassword, $dbname) 
	if (mysqli_connect_error()) {
		die('connection error ('.mysqli_connect_error().')'
	}
	else{
		$sql = "INSERT INTO account (email, password)
		values($email, $password)";
		if ($conn->query($sql)) {
			echo "New record is inserted sucessfully";
		}
		else{
			echo "error: ". $sql. "<br>". $conn->error;
		}
		$conn->close();

	}

	}
	else {
		echo "user should enter password";
	}
		
	}
	else{
		echo "username should not be empty";

	}
</body>
</html>