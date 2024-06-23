<!DOCTYPE HTML>

<html>

	<head>
		<title>Workshop 3</title>

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
				<!--END-MENUBAR-->
			  
			<!--END_HEADER-->
			</div>



			<!--START-SITE-CONTENT-->
			<div id="site_content">
				

				<h2>This is workshop 3</h2>
				
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<br>
					
				<p>
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?					<br>
				</p>				

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