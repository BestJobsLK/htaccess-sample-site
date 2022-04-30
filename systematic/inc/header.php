<?php $active = 'class="active"'; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?>Systematic - An Accounting Firm</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="demo">This is a Demo Website created for <a href="https://www.youtube.com/channel/UCApF2rj6dvqFDW9Ao4R3DTw/">BestJobsLK YouTube Channel</a></div>
	<div class="wrapper">
		<div class="top-bar clearfix">
			<div class="top-bar-links">
				<ul>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">Log In</a></li>
					<li><a href="#">RSS Feeds</a></li>
					<li><a href="#">Archived News</a></li>
				</ul>
			</div> <!-- top-bar-links -->

			<div class="site-search">
				<form method="get" action="index.html">
					<input type="search" name="search-box">
					<button type="submit"></button>
				</form>
			</div> <!-- site-search -->
		</div> <!-- top-bar -->

		<header class="clearfix">
			<div class="logo">
				<h1>Systematic</h1>
				<p>An Accounting Firm</p>
			</div> <!-- logo -->

			<div class="socialmedia">
				<ul>
					<li><a href="#" class="linkedin"><i class="fab fa-facebook-f fa-fw"></i></a></li>
					<li><a href="#" class="youtube"><i class="fab fa-youtube fa-fw"></i></a></li>
					<li><a href="#" class="twitter"><i class="fab fa-twitter fa-fw"></i></a></li>
					<li><a href="#" class="youtube"><i class="fab fa-fw fa-pinterest-p"></i></a></li>
					<li><a href="#" class="linkedin"><i class="fab fa-fw fa-linkedin-in"></i></a></li>
				</ul>
			</div> <!-- socialmedia -->

		</header>

		<nav>
			<ul>
				<li><a href="index.php" <?php echo ( $page == 'home' ) ? $active : '' ; ?>>Home</a></li>
				<li><a href="about-us.php" <?php echo ( $page == 'about' ) ? $active : '' ; ?>>About Us</a></li>
				<li><a href="services.php" <?php echo ( $page == 'services' ) ? $active : '' ; ?>>Services</a></li>
				<li><a href="testimonials.php" <?php echo ( $page == 'testimonials' ) ? $active : '' ; ?>>Testimonials</a></li>
				<li><a href="contact-us.php" <?php echo ( $page == 'contact' ) ? $active : '' ; ?>>Contact Us</a></li>
			</ul>
		</nav>