<!DOCTYPE HTML>

<html>

	<head>
		<title>Contact Us</title>

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
						<li class="unselected">
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
						<li class="selected">
							<a href="contact.php">Contact Us</a>
						</li>
					</ul>
				</div>
				<!--END-MENUBAR-->
			  
			<!--END_HEADER-->
			</div>



			<!--START-SITE-CONTENT-->
			<div id="site_content">
				<div id="content">

						<h1>Contact Us</h1>
						
						<p>
						Find us all over social media!
						</p>
						
						<div class='linkIcons'>
					
							<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
							<a href="https://www.facebook.com/profile.php?id=100093580321978"><i class="fab fa-facebook fa-fw" style='font-size:80px'></i></a>
						
							<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
							<a href="https://www.linkedin.com"><i class="fa fa-linkedin-square fa-fw" style='font-size:80px'></i></a>

							<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
							<a href="https://stackoverflow.com/users/8337079/ametcalf"><i class="fa fa-instagram fa-fw" style='font-size:80px'></i></a>
						</div>
				</div>
				<!--END-CONTENT-->
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