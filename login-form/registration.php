<?php

include("database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles-reg.css?version=51">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
	<title>User Registration Page</title>
</head>
<body>
	<div class="container">
		<div class="form-box">
			<h2>Register Now</h2>
			<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
				
				<!-- DISPLAY VALIDATION ERRORS HERE --> 
				<?php include("errors.php"); ?>
				
				<div class="form-content section1">
					<label for="fname">First Name: 
					<input type="text" name="fname" id="fname" placeholder="First Name" value="<?php echo $fname; ?>">
					<div class="icon"><i class="fa-solid fa-file-signature"></i></div>
					</label>
				</div>
				<div class="form-content section2">
					<label for="lname">Last Name: 
					<input type="text" name="lname" id="lname" placeholder="Last Name" value="<?php echo $lname; ?>">
					<div class="icon"><i class="fa-solid fa-file-signature"></i></div>
					</label>
				</div>
				<div class="form-content section3">
					<label for="user">Username: 
					<input type="text" name="user" id="user" placeholder="Username" value="<?php echo $user; ?>">
					<div class="icon"><i class="fa-solid fa-address-card"></i></div>
					</label>
				</div>
				<div class="form-content section4">
					<label for="email">Email: 
					<input type="text" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>">
					<div class="icon"><i class="fa-solid fa-envelope-open-text"></i></div>
					</label>
				</div>
				<div class="form-content section5">
					<label for="pass">Password: 
					<input type="password" name="pass" id="pass" placeholder="Password">
					<div class="icon"><i class="fa-solid fa-key"></i></div>
					</label>
				</div>
				<div class="form-content section6">
					<label for="cpass">Confirm Password: 
					<input type="password" name="cpass" id="cpass" placeholder="Re-enter Password">
					<div class="icon"><i class="fa-solid fa-key"></i></div>
					</label>
				</div>
				<div class="form-content section7">
					<input type="submit" name="register" value="Register" class="reg-btn">
				</div>
				<div class="form-content section8">
					<p>Already had an account? Then, <a href="login.php" title="Login Page">Sign In</a> for free!</p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>