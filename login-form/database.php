<?php

session_start();

$fname = "";
$lname = "";
$user =  "";
$email = "";
$errors = array();
$exceptions = array();

//CONNECT TO THE DATABASE 

	$conn = mysqli_connect("localhost", "root", "", "form_db");
		
//FOR REGISTRATION PAGE
//CONDITIONS WHEN THE REGISTER BUTTON IS CLICKED
	if (isset($_POST['register'])) {
		$fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
		$lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);
		$user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
		$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
		$pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);
		$cpass = filter_input(INPUT_POST, "cpass", FILTER_SANITIZE_SPECIAL_CHARS);

	//CONDITIONS FOR EMPTY INPUT FIELDS
		if (empty($fname)) {
			array_push($errors, "<strong>FIRST NAME</strong> is required"); //We'll be using array_push() function for adding array to $errors array.
		}
		if (empty($lname)) {
			array_push($errors, "<strong>LAST NAME</strong> is required");
		}
		if (empty($user)) {
			array_push($errors, "<strong>USERNAME</strong> is required");
		}
		if (empty($email)) {
			array_push($errors, "<strong>EMAIL</strong> is required");
		}
		if (empty($pass)) {
			array_push($errors, "<strong>PASSWORD</strong> is required");
		}
		elseif(strlen($pass) < 6 || strlen($pass) > 11) {
			array_push($errors, "Password must a <strong>MIN OF 6</strong> and a <strong>MAX OF 11</strong> characters");
		}
		elseif(empty($cpass)) {
			array_push($errors, "Confirm password");
		}
		elseif ($pass != $cpass) { // if $pass doesn't match to $cpass
			array_push($errors, "Passwords unmatched!");
		}

		//If the user hasn't error/s in inputting the info in fields, the entered password will be converting into bcrypt algorithm and the info will be saving to the database.
		if (count($errors) == 0) {
			$fcapital = ucfirst($fname); //turns the first name's first letter into capital
			$lcapital = ucfirst($lname); //turns the last name's first letter into capital
			$hashedPass = password_hash($pass, PASSWORD_DEFAULT);
			$sql_insert = "INSERT INTO tbl_registration(fname, lname, user, email, pass, hashedPass) VALUES('$fcapital', '$lcapital', '$user', '$email', '$pass', '$hashedPass')";

			try {
			mysqli_query($conn, $sql_insert); //through mysql_query function, the info in the db is manipulated in the table based on the instructed SQL query.
			header("Location: login.php"); //redirects to login page 
			}
			catch(mysqli_sql_exception) {
				array_push($exceptions, "<strong>USERNAME</strong> or <strong>EMAIL</strong> has already taken. Try again");
			}
		} 
	}

	//FOR LOGIN PAGE
	//CONDITIONS WHEN THE LOGIN IS CLICKED
		if (isset($_POST['login'])) {
		$user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
		$pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

	//CONDITIONS FOR EMPTY INPUT FIELDS
		if (empty($user)) {
			array_push($errors, "<strong>USERNAME</strong> is required");
		}
		if (empty($pass)) {
			array_push($errors, "<strong>PASSWORD</strong> is required");
		}

	//If the user hasn't error/s in inputting the info in fields, the entered password will be converting into bcrypt algorithm and the info will be saving to the database.
		if (count($errors) == 0) {
			$fcapital = ucfirst($fname); //turns the first name's first letter into capital
			$lcapital = ucfirst($lname); //turns the last name's first letter into capital
			$sql_select = "SELECT * FROM tbl_registration WHERE user = '$user' AND pass = '$pass'";
			$result = mysqli_query($conn, $sql_select); //through mysql_query function, the info in the db is manipulated in the table based on the instructed SQL query.

			if (mysqli_num_rows($result) == 1) {
				$_SESSION['success'] = "You're just successfully logged in!";
				$_SESSION['user'] = $user;
				header("Location: index.php"); //redirects to homepage 	
			}

			else {
					array_push($errors, "Wrong <strong>USERNAME/PASSWORD</strong>");
					
			}
		}
	};	

	//LOGOUT
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("Location: login.php");
	}

mysqli_close($conn);

?>
