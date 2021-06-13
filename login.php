<?php
	
	if ($_POST ){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "test1";
		
		$email = $_POST['email'];
        $password = $_POST["password"];
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		$query = "SELECT * From  usertable  Where  email='$email' &&  password='$password'";
		$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result) ==1){
			echo "Correct Credentials";
			session_start();
			$_SESSION['auth']='true';
			header('location:index.php');
		} else {
			echo "Username or Password is incorrect";
			#header('location:index.html');
		}
	}
	#header('Location: index.html');
?>
