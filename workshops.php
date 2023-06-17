<!DOCTYPE HTML>

<html>

	<head>
		<title>Workshops</title>

		<!---Head section--->
		<?php require_once('includes/head_section.php') ?>
		<!---// Header section--->

	</head>
         
	<body>

		<div id="main">
		
			<!---Header--->
			<div id="header">
			
				<!--START-MENUBAR-->
				<div id="menubar">
					<ul class="menu">
						<li class="unselected">
							<a href="index.php">Home</a>
						</li>
						<li class="selected">
							<a href="workshops.php">Workshops</a>
							  <ul class="dropdown">
								<li class="dropdownTab"><a href="#">Workshop 1</a></li>
								<li class="dropdownTab"><a href="#">Workshop 2</a></li>
								<li class="dropdownTab"><a href="#">Workshop 3</a></li>
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
				<!--END-MENUBAR-->
			  
			<!--END_HEADER-->
			</div>



			<!--START-SITE-CONTENT-->
			<div id="site_content">
				
				
					
				<h2>This is the Workshops Page</h2>

			<!--END-SITE-CONTENT-->
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