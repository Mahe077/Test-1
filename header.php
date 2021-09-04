<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>My portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/9c5a05f882.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
	<a class="header-brand" href="index.php">mmtuts</a>
	<nav>
		<ul>
			<li><a href="portfolio.html">Portfolio</a></li>
			<li><a href="about.html">About me</a></li>
			<li><a href="contact.html">Contact</a></li>
      <?php
        if(isset($_SESSION['useruid'])){
          echo "<li><a href='profile.php'>Profile</a></li>";
    			echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
        }
        else{
          echo "<li><a href='signup.php'>Sign Up</a></li>";
    			echo "<li><a href='login.php'>Log In</a></li>";
        }
      ?>
		</ul>
		<a class="header-cases" href="cases.html">Cases</a>
	</nav>
	</header>
  <main>
