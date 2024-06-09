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
	<title>Database Management Page</title>
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
				<h3>Advantages of DBMS</h3>
				<ol>
				
				<li><i class="fa-solid fa-d"></i>ata Organization </li>
				<li><i class="fa-solid fa-d"></i>ata Integrity </li>
				<li><i class="fa-solid fa-c"></i>oncurrent Access </li>
				<li><i class="fa-solid fa-d"></i>ata Security </li>
				<li><i class="fa-solid fa-b"></i>ackup and Recovery </li>
				<li><i class="fa-solid fa-d"></i>ata Sharing </li>

				</ol><br />

				<h3>Disadvantages of DBMS</h3>
				<ol>
				
				<li><i class="fa-solid fa-c"></i>omplexity </li>
				<li><i class="fa-solid fa-p"></i>erformance Overhead </li>
				<li><i class="fa-solid fa-s"></i>calability </li>
				<li><i class="fa-solid fa-c"></i>ost </li>
				<li><i class="fa-solid fa-l"></i>imited Use Cases </li>

				</ol>
			</aside>
					
		<article>	
			<h1>Introduction to Database Management</h1>

			<p>Database management involves gathering, updating, transferring and storing important data on your operating system. There are a variety of tools that you may use to assist you with the design, formatting and navigation of information found within your database. If you want to enhance your database management processes, learning about these tools may be useful for you. In this article, we discuss what database management tools are and provide a detailed list of examples for you to review. </p><br />

			<p>A database is a collection of interrelated data which helps in the efficient retrieval, insertion, and deletion of data from the database and organizes the data in the form of tables, views, schemas, reports, etc. For Example, a university database organizes the data about students, faculty, admin staff, etc. which helps in the efficient retrieval, insertion, and deletion of data from it. </p><br />

			<p>Database management tools involve the equipment that IT professionals can use to organize information in tables and store within an operating system. They can access the information using these tools so that they may update change it regularly, depending on their technology needs. Database management systems include the different software that allows users to create, manage and transfer data, and users may handle tools to operate these systems more easily or complete a higher amount of functions that they may not be able to access without additional tools. </p><br />

			<p style="font-weight: bold; text-indent: 0; text-align: center;">Database Management Tools:</p>

			<ol>
			<li><a href="#section1">MySQL</a></li>
			<li><a href="#section2">MySQL Workbench</a></li>
			<li><a href="#section3">Microsoft Server SQL Management Studio</a></li>
			<li><a href="#section4">MongoDB</a></li>
			<li><a href="#section5">SQL Developer</a></li>
			</ol><br />

			<p id="section1" style="font-weight: bold; text-indent: 0; text-align: left;">1. MySQL<br />
				<p>MySQL is a database management tool that allows professionals to download a wide variety of open-source relational databases. By doing so, they may transfer and download information from numerous websites, applications and networks. After downloading the information, you may change it or update it before saving it to your system. It's common for companies with many IT professionals to use MySQL since this tool is compatible with many popular websites and applications.
				</p><br />

			<p id="section2" style="font-weight: bold; text-indent: 0; text-align: left;">2. MySQL Workbench<br />
				<p>MySQL Workbench is an optional tool that you may download to provide additional assistance to your MySQL tool. Oracle provides this tool for free to help better manage existing MySQL databases. While you may use this tool to complete several database management tasks, it's most common to use it to enhance your data modeling processes and SQL development.
				</p><br />
				
				<p>This is because the workbench provides your system with more design and modeling options while creating tables, graphs and charts, and it also allows you to update existing information with newly designed data. You may also use MySQL Workbench for its extensive administration tools that allow you to configure your server more easily and manage data gathering and transfer while backing up stored data.
				</p><br />

			<p id="section3" style="font-weight: bold; text-indent: 0; text-align: left;">3. Microsoft Server SQL Management Studio<br />
				<p>Java is another exemplary programming language for backend web development. The object-oriented programming language is widely used for developing enterprise-scale web applications along with the development of android applications, desktop applications, scientific applications, etc. The primary advantage of using Java is that it works on the Write Once Run Anywhere principle i.e, the compiled Java code can be executed on any platform that supports Java without the need for recompilation. In more specific terms, the Java code is first compiled into byte code which is machine-independent and then this byte code runs on the JVM regardless of the underlying architecture.
				</p><br />

			<p id="section4" style="font-weight: bold; text-indent: 0; text-align: left;">4. MongoDB <br />
				<p>MongoDB is an open-source, non-relational (NoSQL) distributed database written in C++. It is document-based, which means that it stores data in rich JSON documents. The advantages of MongoDB, and of NoSQL in general are its dynamic schema, scalability, manageability, speed, and flexibility. It is a strong choice for businesses that are experiencing rapid growth, and is often applied for Node.js projects as well.
				</p><br />

			<p id="section5" style="font-weight: bold; text-indent: 0; text-align: left;">5. SQL Developer<br />
				<p>SQL Developer tools is an Oracle database management tool available on multiple platforms, which include Windows, Mac, and Linux. It’s best suited for a big cross-functional globally based team and has the capability to manage and develop Oracle Database in both on-premise and cloud deployments. SQL Developer can also connect and interact with non-Oracle databases like IBM db2, MS SQL Server, and MySQL. 
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



		