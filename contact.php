<!DOCTYPE HTML>

<html>

	<head>
		<title>Contact Us</title>

		<!---Head section--->
		<?php require_once('includes/head_section.php') ?>
		<!---// Header section--->
		
		<style>
            /* Style for popup message */
            #popupMessage {
                display: none; /* Hidden by default */
                position: fixed;
                top: 20%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: white;
                border: 1px solid black;
                padding: 20px;
                z-index: 1000;
            }
        </style>

	</head>
         
	<body>
		<?php session_start(); ?>

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
								<!--
								<li class="dropdownTab"><a href="workshop2.php">Workshop 2</a></li>
								<li class="dropdownTab"><a href="workshop3.php">Workshop 3</a></li>
								-->
							  </ul>
						</li>
						<!--
						<li class="unselected">
							<a href="portfolio.php">Portfolio</a>
						</li>
						-->
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
						You can also find us on Facebook, Instagram <a href="https://www.eventbrite.co.uk/o/dandelion-sth-85890503143?_gl=1*1x05o4j*_up*MQ..*_ga*MTM1MzU5ODUyNy4xNzE5OTA5NjI3*_ga_TQVES5V6SH*MTcxOTkwOTYyNi4xLjAuMTcxOTkwOTYyNi4wLjAuMA..">or check out our workshops at Eventbrite</a>.
						</p>
						
						<div class='linkIcons'>
					
							<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
							<a href="https://www.facebook.com/profile.php?id=100093580321978"><i class="fab fa-facebook fa-fw" style='font-size:80px'></i></a>
							
							<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
							<a href="https://www.instagram.com/dandelion_sth/"><i class="fab fa-instagram fa-fw" style='font-size:80px'></i>
							</a>
						

						</div>

						
						<!-- Popup Message -->
						<?php if(isset($_SESSION['popup_message'])): ?>
							<div class="popup-message">
								<p><?php echo $_SESSION['popup_message']; ?></p>
								<button onclick="this.parentElement.style.display='none';">Close</button>
							</div>
							<?php unset($_SESSION['popup_message']); ?>
						<?php endif; ?>	
						
						<!-- CONTACT FORM -->
						    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
        
							<div class="fcf-form-group">
								<label for="Name" class="fcf-label">Your name</label>
								<div class="fcf-input-group">
									<input type="text" id="Name" name="Name" class="fcf-form-control" required>
								</div>
							</div>

							<div class="fcf-form-group">
								<label for="Email" class="fcf-label">Your email address</label>
								<div class="fcf-input-group">
									<input type="email" id="Email" name="Email" class="fcf-form-control" required>
								</div>
							</div>

							<div class="fcf-form-group">
								<label for="Message" class="fcf-label">Your message</label>
								<div class="fcf-input-group">
									<textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
								</div>
							</div>

							<div class="fcf-form-group">
								<button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
							</div>

						

							</form>
						
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