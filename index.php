<!DOCTYPE HTML>

<html>

	<head>
		<title>Dandelion STH: Home Page</title>

		<!---Head section--->
		<?php require_once('includes/head_section.php') ?>
		<!---// Header section--->

	</head>
         
	<body>

		<div id="main">
		
			<!---Header--->
			<div id="header">
			
			<!-- START-MENUBAR -->
			<div id="menubar">
			  <ul class="menu">
				<li class="selected">
				  <a href="index.php">Home</a>
				</li>
				<li class="unselected">
					<a href="workshops.php">Workshops</a>
						<ul class="dropdown">
							<li class="dropdownTab"><a href="workshop1.php">Terrariums</a></li>
							<li class="dropdownTab"><a href="workshop2.php">Workshop 2</a></li>
							<li class="dropdownTab"><a href="workshop3.php">Workshop 3</a></li>
						</ul>
				</li>
				<li class="unselected">
				  <a href="portfolio.php">Portfolio</a>
				</li>
				<li class="unselected">
				  <a href="about.php">About</a>
				</li>
				<li class="unselected">
				  <a href="contact.php">Contact Us</a>
				</li>
			  </ul>
			</div>
			<!-- END-MENUBAR -->
			  
			<!--END_HEADER-->
			</div>



			<!--START-SITE-CONTENT-->
			<div id="site_content">
				
				<!-- Include the Logo -->
				<img src='static/images/DandelionLogo.png' alt="Logo" class="logoContainer" />
					
					
				<h2>Welcome to Dandelion STH - Gardening for Wellbeing</h2>

				<p>
					Discover the healing power of nature and the transformative benefits of therapeutic horticulture at Dandelion STH. Our mission is to cultivate wellbeing and improve lives through our carefully designed workshops that focus on community groups.
				</p>

				<!-- Placeholder Image -->
				<img src='static/images/DandelionFlowerPlaceholder.jpg' alt="Placeholder Photo" class="centerphoto" />

				<h2>Our Purpose</h2>

				<p>
					At Dandelion STH, we are dedicated to providing tailored workshops that promote wellbeing, social connection, and emotional support. Our workshops create a therapeutic and inclusive space where participants can experience the joys of gardening, find solace in nature, and strengthen connections with others.
				</p>

				<h2>Leaving a Positive Impact</h2>

				<p>
					As a social enterprise, we believe in giving back to the community. Through our workshops, we strive to leave a lasting positive impact on the lives of participants and the community organizations we partner with. Together, we cultivate a stronger and more resilient society.
				</p>

				<!-- Call-to-Action Section -->
				<div class="call-to-action">
					<a href="contact.php" class="cta-button">Join Us in Cultivating Wellbeing</a>
				</div>
				
			</div>
			
			<!--START-FOOTER-->
			<div id="footer">
			<?php include_once  ('includes/footer.php');?>
			</div>
			<!--END-FOOTER-->
			
		<!--END-MAIN-->
		</div>
		
		
		
	</body>


</html>