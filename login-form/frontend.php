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
	<link rel="stylesheet" type="text/css" href="styles-links.css?version=51">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
	<title>Frontend Page</title>
</head>
<body>
	<div class="container">
		<header>
			<div class="header-container">
			<h2> Brief Facts about Web Development </h2>
			</div>
		</header>

		<nav>
			<ul>
				<li><a href="index.php" title="Home Page">Home</a>&nbsp;&nbsp;&nbsp;</li>
				<li><a href="#" title="Frontend Page">Frontend</a>&nbsp;&nbsp;&nbsp;</li>
				<li><a href="backend.php" title="Backend Page">Backend</a>&nbsp;&nbsp;&nbsp;</li>
				<li><a href="db-manage.php" title="Database Management Page">Database Management</a></li>
			</ul>
			<span class="nav-span"><b>Hi <?php if (isset($_SESSION['user'])) {echo $_SESSION['user']; } ?>! |</b> <a href="index.php?logout='1'" title="Logout" name="logout">Logout</a></span>
		</nav>

		<main>
			<aside>
				<h3>Responsibilities of a Frontend Developer</h3>
				<ol>
				
				<li><i class="fa-solid fa-o"></i>ptimizing the user experience</li>
				<li><i class="fa-solid fa-u"></i>sing HTML, JavaScript, and CSS to bring concepts to life</li>
				<li><i class="fa-solid fa-d"></i>eveloping and maintaining the user interface</li>
				<li><i class="fa-solid fa-i"></i>mplementing design on mobile websites</li>
				<li><i class="fa-solid fa-c"></i>reating tools that improve site interaction regardless of the browser</li>
				<li><i class="fa-solid fa-m"></i>anaging software workflow</li>
				<li><i class="fa-solid fa-f"></i>ollowing SEO best practices</li>
				<li><i class="fa-solid fa-f"></i>ixing bugs and testing for usability</li>

				</ol>
			</aside>
					
		<article>	
			<h1>Introduction to Frontend Development</h1>

			<p>Front-end web development, or client-side development, refers to working with HTML, CSS and JavaScript for a website or web application that allows users to see and interact with them directly. So all that you see on the page - and by that we are referring to anything happening on the user’s computer - is a result of front-end development. There are some websites and web applications that only need front end development </p><br />

			<p style="font-weight: bold; text-indent: 0; text-align: center;">Programming/Coding Languages used for Frontend Development:</p>

			<ol>
			<li><a href="#section1">HTML</a></li>
			<li><a href="#section2">CSS</a></li>
			<li><a href="#section3">Bootstrap</a></li>
			<li><a href="#section4">JavaScript</a></li>
			<li><a href="#section5">jQuery</a></li>	
			</ol><br />

			<p id="section1" style="font-weight: bold; text-indent: 0; text-align: left;">1. HTML<br />
				<p>The backbone of any website development process, web pages can not exist without Hyper Text Markup Language (HTML). Hypertext means that the text has links, called hyperlinks, embedded in it. So when a user clicks on a word or a phrase that has a hyperlink, it leads him/ her to another web-page. A markup language also means that the text can be converted into images, tables, links and other representations. 
				</p><br />

			<p id="section2" style="font-weight: bold; text-indent: 0; text-align: left;">2. CSS<br />
				<p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. So it deals with the presentation aspect of the site and gives your site its own unique look. This is done by maintaining style sheets which sit on top of other style rules and are activated on the basis of other inputs like device screen size and resolution.  
				</p><br />

			<p id="section3" style="font-weight: bold; text-indent: 0; text-align: left;">3. Bootstrap<br />
				<p>Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains HTML, CSS and JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components. 
				</p><br />

			<p id="section4" style="font-weight: bold; text-indent: 0; text-align: left;">4. JavaScript<br />
				<p>JavaScript supports event-driven, functional, and imperative programming styles. It is used to transform a static HTML page into a dynamic interface. JavaScript code can use the DOM to manipulate a web page in response to events, such as user input.  
				</p><br />


			<p id="section5" style="font-weight: bold; text-indent: 0; text-align: left;">5. jQuery<br />
				<p>An an open-source Javascript framework introduced in the year 2006, jQuery is aimed at simplifying HTML and CSS and thus making front-end development easier. With jQuery, one can design creative apps with ease. Not only is it easy to learn, but also jQuery is compatible with almost every browser and it has many plugins. 
				</p><br />

		</article>
		</main>

		<footer>
			<p>Email <a href="mailto:alison.estrella@cvsu.gmail.com">Alison Estrella</a> for more datails</p>
			<p>&copy; Copyright since 2021</p>
		</footer>
	</div>
</body>
</html>



		