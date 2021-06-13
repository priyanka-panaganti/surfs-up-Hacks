<?php
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$gender = $_POST["gender"];
	
	if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) ){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "test1";
		
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		
		if(mysqli_connect_error()){
			die('Connect error ('.mysql_connect_error().')'.mysqli_connect_error());
		} else {
			$SELECT = "SELECT email From usertable Where email=? Limit 1";
			$INSERT = "INSERT Into usertable (username, email , password , gender) values (?,?,?,?)"; 
			
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			
			if ($rnum == 0){
				$stmt->close();
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssss", $username, $email, $password, $gender);
				$stmt->execute();
				echo "New record added";
				header('Location: index.html');
			} else{
				echo "This email id already exist";
				#header('Location: index.html');
			}
			$stmt->close();
			$conn->close();
		}
	} else {
		echo "All fields are required";
		die();
	}
	
?>