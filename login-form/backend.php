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
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<title>Backend Page</title>
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
				<h3>Roles of a Backend Developer</h3>
				<ol>
				
				<li><i class="fa-solid fa-u"></i>nderstands the goals of the software and comes up with effective solutions </li>
				<li><i class="fa-solid fa-c"></i>ompile and analyze the data, processes, and codes to troubleshoot problems and identify areas of improvement </li>
				<li><i class="fa-solid fa-c"></i>ollaborating with the frontend developers and other teams to establish objectives and design models (architecture) </li>
				<li><i class="fa-solid fa-m"></i>anipulating data and ensure authorized access to it at all times </li>
				<li><i class="fa-solid fa-d"></i>eveloping, managing, and working with external API resources across all device securely </li>
				<li><i class="fa-solid fa-o"></i>rganizing the logic of the system using and implementing algorithms </li>

				</ol>
			</aside>
					
		<article>	
			<h1>Introduction to Backend Development</h1>

			<p>Backend Development is the term for the behind-the-scenes activities that happens when you do anything on a website or web application. It is mostly referred to the server-side of an application and everything that communicates between the database and the frontend/browser. You can also say that it’s the server side of development that focuses primarily on how the site works.</p><br />

			<p>Backend technologies are a combination of servers, applications, and databases. It lays the foundational code that enables websites to process the actions that users take on the front end and deliver the correct information in return. Neither works without the other—you need the website backend to make the front end work, and you need the front end so people can actually access and interact with the website.</p><br />

			<p>Backend programming can either be object-oriented (OOP) or functional. OOP is the technique that focuses on the creation of objects. With object-oriented programming, statements should be executed in a particular order. Functional back end programming is a technique that is more “action”-based. Functional programming uses declarative language, which means that statements can be executed in any order. It’s commonly used for data science, and popular languages are SQL, F#, and R.</p><br />

			<p>Back-end development languages can either be statically typed or dynamically typed. The former is more rigid, but better at catching errors, whereas the latter is more flexible but allows for variables to change types (which could account for unexpected errors). There are also full-stack developers, who can work with both front-end and backend tools and technologies. They’re the jack-of-all-trades of the programming world.</p><br />	

			<p style="font-weight: bold; text-indent: 0; text-align: center;">Programming/Coding Languages used for Backend Development:</p>

			<ol>
			<li><a href="#section1">Python</a></li>
			<li><a href="#section2">PHP</a></li>
			<li><a href="#section3">Java</a></li>
			<li><a href="#section4">Ruby</a></li>
			<li><a href="#section5">Golang</a></li>	
			<li><a href="#section6">C#</a></li>
			</ol><br />

			<p id="section1" style="font-weight: bold; text-indent: 0; text-align: left;">1. Python<br />
				<p>Though Python is quite famous among individuals for its compatibility with advanced technologies like Machine Learning, Internet of Things (IoT), Data Science, etc. – let us tell you that this enriching programming language is widely used and very much suitable for backend web development also. Even one of the leading IT giants of the current times Google significantly relies on Python, and it is one of the 3 primary languages used by Google (the other two are Java and C++). One of the major advantages of using Python for web development is its huge collection of standard libraries that make the work of developers comparatively easier and efficient. 
				</p><br />

			<p id="section2" style="font-weight: bold; text-indent: 0; text-align: left;">2. PHP<br />
				<p>PHP (or you can say Hypertext Preprocessor) is a veteran player in the web development world. This open-source server-side scripting language is created in 1994 and is specifically used for web development. As it is an interpreted language – it doesn’t require a compiler either and also it can run on almost every major operating system like Windows, Linux, macOS, Unix, etc. Talking about the enriching features of PHP, there are so many such as easy to learn nature, cross-platform compatibility, OOPs features, support to various standard databases like MySQL, SQLite, etc. huge community support, and many others. Other than that, PHP is very much secure as a server-side scripting language as there are numerous hash functions available in PHP for the encryption of user’s data. In particular, if you’re a beginner – you can opt to go with PHP for backend web development. 
				</p><br />

			<p id="section3" style="font-weight: bold; text-indent: 0; text-align: left;">3. Java<br />
				<p>Java is another exemplary programming language for backend web development. The object-oriented programming language is widely used for developing enterprise-scale web applications along with the development of android applications, desktop applications, scientific applications, etc. The primary advantage of using Java is that it works on the Write Once Run Anywhere principle i.e, the compiled Java code can be executed on any platform that supports Java without the need for recompilation. In more specific terms, the Java code is first compiled into byte code which is machine-independent and then this byte code runs on the JVM regardless of the underlying architecture.
				</p><br />

			<p id="section4" style="font-weight: bold; text-indent: 0; text-align: left;">4. Ruby<br />
				<p>Ruby is a general-purpose, interpreted programming language that supports various programming paradigms such as procedural, functional, and object-oriented programming. The language is being widely used for web development across the world and is very much recommended to beginners for getting started with backend web development as it is comparatively easier to learn. Alike Python, Ruby also focuses on increasing the developers’ productivity that eventually fastens the web development process. The particular language supports almost every major platform such as Windows, Mac, and Linux, and let us tell you this as well that Ruby is highly based on many other programming languages like Perl, Lisp, Eiffel, Ada, etc. Dynamic typing and Duck typing. 
				</p><br />

			<p id="section5" style="font-weight: bold; text-indent: 0; text-align: left;">5. Golang<br />
				<p>If you’re thinking that Go is not that popular among the developers then let us tell you as per last year’s report of Stack Overflow – it was one of the top 5 most loved programming languages by developers across the world. Go is a statically typed programming language that is designed at Google and having syntax quite similar to C language. The language allows the developers to build scalable and secure web applications more efficiently. One of the major advantages of using Go is that it provides excellent support for multithreading and also, it has the garbage collection feature for automatic memory management. 
				</p><br />

			<p id="section6" style="font-weight: bold; text-indent: 0; text-align: left;">6. C#<br />
				<p>C# is one of those few languages that is constantly ranking under the top 5 programming languages at various standard indices for the last few years. Though, you need to know that this general-purpose language was initially developed by Microsoft primarily for the .Net framework. Alongside, backend web development, now C# is extensively being used in multiple areas such as the development of Windows applications, game development, etc.
				</p><br />

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



		