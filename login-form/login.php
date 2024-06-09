<?php

include("database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles-log.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
	<title>User Login Page</title>
</head>
<body>
	<div class="container">
		<div class="form-box">
			<h2>Login Now</h2>
			<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

				<!-- DISPLAY VALIDATION ERRORS HERE --> 
				<?php include("errors.php"); ?>  

				<div class="form-content section1">
					<label for="user">Username: 
					<input type="text" name="user" id="user" placeholder="Username" value="<?php echo $user; ?>">
					<div class="icon"><i class="fa-solid fa-address-card"></i></div>
					</label>
				</div>
				<div class="form-content section2">
					<label for="pass">Password: 
					<input type="password" name="pass" id="pass" placeholder="Password">
					<div class="icon"><i class="fa-solid fa-key"></i></div>
					</label>
				</div>
				<div class="form-content section3">
					<input type="submit" name="login" value="Login" class="login-btn">
				</div>
				<div class="form-content section4">
					<p>Doesn't have an account yet? Then, <a href="registration.php">Sign Up</a> for free!</p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>