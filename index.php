<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: AGP';
    $to = 'drey.galygin@gmail.com';
    $subject = 'Portfolio';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

		if ($_POST['submit']) {
		    if (mail ($to, $subject, $body, $from)) {
		        echo '<p>Your message has been sent!</p>';
		    } else {
		        echo '<p>Something went wrong, go back and try again!</p>';
		    }
		}
?>

<html>
	<head>
		<title>Andriy's Portfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<!-- <span class="icon fa-diamond"></span> -->
						</div>
						<div class="content">
							<div class="inner">
								<h1>Andriy Galygin</h1>
								<p>WEB DEVELOPMENT | UX DESIGN | KNOWLEDGE MANAGEMENT</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Intro</a></li>
								<li><a href="#work">Work</a></li>
								<!-- <li><a href="#about">About</a></li> -->
								<li><a href="#contact">Contact</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Intro</h2>
								<!-- <span class="image main"><img src="images/pic01.jpg" alt="" /></span> -->
								<p>My name is <strong>Andrey</strong>. I am a UX/UI designer and a web developer. I enjoy creating simple yet fun to use interfaces.
									I’ve developed a few business websites and created wireframes and fully functional mockups for the customers. <br>
									<br>My greatest strength is able to bring programmers and designers to create a solution to a problem.
									I’m seeking continuous growth to improve my programming and designing and keep creating easy to use products.
								</p>
							</article>

						<!-- Work -->
							<article id="work">

								<h2 class="major">MODstr App</h2>
								<span class="image main"><img src="images/MODstrLogo.png" alt="" /></span>
								<p>
									Andriy worked on a four-man team to developed a hybrid app for car enthusiasts
									so they can share and keep track of their build. Technologies such as Cordova and
									Framework7 were used to develop this project. Responsibilities
									included UX/UI design Front-end development, marketing and more.
								</p>

								<h2 class="major">F5 Networks KM Intern</h2>
								<span class="image main"><img src="images/f5.jpg" alt="" /></span>
								<p>During Andriy's time at F5 Networks he created and managed digital-signage (PTG-TV) content for the Product
									Technology Group (PTG). Managed a project to standardize digital-signage technical across the F5
									Networks enterprise. Managed day-to-day reporting needs for PTG's Director of Program and Release
									Management. Worked with teams like F5 knowledge management, program management, software
									engineering, internal communications, and collaboration platforms to undertake challenging
									assignments. He learned some new front end technologies, developed and enhanced new
									UX/UI/Interaction design skills, met other interns, and he made significant contributions to F5.</p>

								<h2 class="major">VOH Church Website</h2>
								<span class="image main"><img src="images/voh/1.png" alt="" /></span>
								<p>Andriy worked on a two-person team to design and develop responsive web application for Voice of Hope
									Church located in Tukwila. Coded the website using HTML5, CSS, PHP, JavaScript, Bootstrap and jQuery.
									Performed the lead designer and project manager duties to make sure the project is finished on time.</p>

								<h2 class="major">ESOL Website</h2>
								<span class="image main"><img src="images/esol/1.png" alt="" /></span>
								Andriy worked on a three-person team to develop a flashcard web application to help speakers of other
								languages learn English vocabulary. Coded the website using PHP, MySQL, jQuery, and Bootstrap.
								Performed lead UX/UI/Interaction designer duties on the project, responsible for efficient page flow and
								navigation, content organization, selection of color palette, and creation of supporting icons and images.
								<br>
								<br>

								<h2 class="major">GRC IT Support</h2>
								<span class="image main"><img src="images/grc.jpg" alt="" /></span>
								Served as a second tier technical expert, providing analysis, resolution and problem escalation.
								Responsible for Windows system installation and maintenance, computer components upgrade,
								software installation.
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">About</h2>
								<span class="image main"><img src="images/pic03.jpg" alt="" /></span>
								<p>Lorem ipsum dolor sit amet, consectetur et adipiscing elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices. Aliquam libero et malesuada fames ac ante ipsum primis in faucibus. Cras viverra ligula sit amet ex mollis mattis lorem ipsum dolor sit amet.</p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="https://www.linkedin.com/in/andriy-galygin-94b593a9" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="https://github.com/andriy-g" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>
					</div>
					<footer id="footer">
						<p>

						</p>
					</footer>
			</div>


		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
