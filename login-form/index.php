<?php

include("database.php");

//IF THE USER IS NOT LOGGED IN, THEY CANNOT ACCESS THIS PAGE

if (empty($_SESSION['user'])) {
	header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles-index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
	<title>Home Page</title>
</head>
<body>
	<div class="container">
		<header>
			<?php if (isset($_SESSION['success'])): ?>
			<div class="success" id="fadeout">
			<button class="toast-btn" onclick="hideToast()">X</button>
			<h3> <?php echo $_SESSION['success']; unset($_SESSION['success']); ?> </h3>
			</div>
		<?php endif ?>
			<div class="header-container">
			<h2> Brief Facts about Web Development </h2>
			</div>
		</header>

		<nav>
			<ul>
				<li><a href="#" title="Home Page">Home</a>&nbsp;&nbsp;&nbsp;</li>
				<li><a href="frontend.php" title="Frontend Page">Frontend</a>&nbsp;&nbsp;&nbsp;</li>
				<li><a href="backend.php" title="Backend Page">Backend</a>&nbsp;&nbsp;&nbsp;</li>
				<li><a href="db-manage.php" title="Database Management Page">Database Management</a></li>
			</ul>
			<span class="nav-span"><b>Hi <?php if (isset($_SESSION['user'])) {echo $_SESSION['user']; } ?>! |</b> <a href="index.php?logout='1'" title="Logout" name="logout">Logout</a></span>
		</nav>

		<main>
			<aside>
				<h3>5 Trivia for Web Development</h3>
				<ol>
				
				<li><i class="fa-solid fa-t"></i>he first website was built by Tim Berners-Lee in 1991. He wanted to create a way for scientists to communicate with each other. </li>
				<li><i class="fa-solid fa-c"></i>SS (Cascading Style Sheets) first allowed web designers to style elements on a webpage and also allowed web developers to create custom layouts when it was first introduced in 1994. </li>
				<li><i class="fa-solid fa-w"></i>eb design is important because it impacts how your audience perceives your brand. </li>
				<li><i class="fa-solid fa-t"></i>he most widely used web development languages are JavaScript, CSS, and HTML. </li>
				<li><i class="fa-solid fa-f"></i>ull-stack developers, front-end developers, back-end developers, and UX/UI designers are just a few of the new professions and positions that have been made possible by web development. </li>

				</ol>
			</aside>
					
		<article>	
			<h1>What is Web Development?</h1>

			<p>Web development, also known as website development, refers to the tasks associated with creating, building, and maintaining websites and web applications that run online on a browser. It may, however, also include web design, web programming, and database management. </p><br />

			<p>Web development is closely related to the job of designing the features and functionality of apps (web design). The term development is usually reserved for the actual construction of these things (that is to say, the programming of sites). </p><br />

			<p>The basic tools involved in web development are programming languages called HTML (Hypertext Markup Language), CSS (Cascading Style Sheets), and JavaScript. There are, however, a number of other programs used to “manage” or facilitate the construction of sites that would otherwise have to be done “from scratch” by writing code. A number of content management systems (CMS) fall into this category, including WordPress, Joomla!, Drupal, TYPO3, and Adobe Experience Manager, among others. </p><br />	
		</article>
		</main>

		<footer>
			<p>Email <a href="mailto:alison.estrella@cvsu.gmail.com">Alison Estrella</a> for more datails</p>
			<p>&copy; Copyright since 2021</p>
		</footer>
	</div>

	<script type="text/javascript">
		function hideToast() {
			const success = document.getElementById('fadeout');
			success.style.display = 'none';
		}
	</script>
</body>
</html>



		